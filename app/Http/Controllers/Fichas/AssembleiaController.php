<?php

namespace App\Http\Controllers\Fichas;

use App\Http\Controllers\Controller;
use App\Mail\Fichas\AssembleiaInscricaoInterna;
use App\Mail\Fichas\AssembleiaParticipanteMail;
use App\Models\InscricaoCursilho;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AssembleiaController extends Controller
{
    private const SESSION_PREFIX = 'wizard.fichas.assembleia.';
    private const TOTAL_STEPS = 2;

    public function start(): RedirectResponse
    {
        $evento = $this->findPrimeiroEventoDisponivel();

        if ($evento === null) {
            return redirect('/fichas/naodisponivel');
        }

        return redirect()->route('assembleia.show', [
            'numero' => $evento->numero,
        ]);
    }

    public function show(int $numero): RedirectResponse
    {
        $evento = $this->findEventoByNumero($numero);

        if ($evento === null) {
            return redirect('/fichas/naodisponivel');
        }

        $wizard = $this->getWizard($numero);
        $wizard['started'] = true;
        $wizard['current_step'] = 1;
        $wizard['data']['tipo_evento'] = $evento->tipo_evento ?? null;
        $wizard['data']['publico_evento'] = $evento->publico_evento ?? 'ASSEMBLEIA';
        $wizard['data']['numero'] = (int) $evento->numero;
        $wizard['data']['evento_id'] = $evento->id ?? null;

        $this->putWizard($numero, $wizard);

        return redirect()->route('assembleia.passo.1', [
            'numero' => $numero,
        ]);
    }

    public function step(Request $request, int $numero): Response|RedirectResponse
    {
        $evento = $this->findEventoByNumero($numero);

        if ($evento === null) {
            return redirect('/fichas/naodisponivel');
        }

        $step = (int) $request->route('step');

        if (!in_array($step, [1, 2], true)) {
            return redirect()->route('assembleia.passo.1', [
                'numero' => $numero,
            ]);
        }

        $wizard = $this->getWizard($numero);

        if ($step === 2 && empty($wizard['data']['step1'])) {
            return redirect()->route('assembleia.passo.1', [
                'numero' => $numero,
            ]);
        }

        return $this->noCacheView('fichas.assembleia.passo' . $step, [
            'evento' => $evento,
            'numero' => $numero,
            'wizard' => $wizard,
            'dados' => $wizard['data']['step2'] ?? [],
            'sexoLabel' => 'Assembleia',
            'dias' => $evento->dias ?? '',
        ]);
    }

    public function storeStep(Request $request, int $numero): RedirectResponse
    {
        $evento = $this->findEventoByNumero($numero);

        if ($evento === null) {
            return redirect('/fichas/naodisponivel');
        }

        $step = (int) $request->route('step');

        if (!in_array($step, [1, 2], true)) {
            return redirect()->route('assembleia.passo.1', [
                'numero' => $numero,
            ]);
        }

        if ($step === 1) {
            $dados = $this->validateStep1($request);

            $wizard = $this->getWizard($numero);
            $wizard['data']['step1'] = $dados;
            $wizard['current_step'] = 1;

            $this->putWizard($numero, $wizard);

            return redirect()->route('assembleia.passo.2', [
                'numero' => $numero,
            ]);
        }

        $dados = $this->validateStep2($request, $evento);

        $wizard = $this->getWizard($numero);

        if (empty($wizard['data']['step1'])) {
            return redirect()->route('assembleia.passo.1', [
                'numero' => $numero,
            ]);
        }

        $wizard['data']['step2'] = $dados;
        $wizard['data']['cpf'] = $dados['cpf'];
        $wizard['current_step'] = 2;

        $this->putWizard($numero, $wizard);

        return redirect()->route('assembleia.revisao', [
            'numero' => $numero,
        ]);
    }

    public function review(int $numero): Response|RedirectResponse
    {
        $evento = $this->findEventoByNumero($numero);

        if ($evento === null) {
            return redirect('/fichas/naodisponivel');
        }

        $wizard = $this->getWizard($numero);

        if (empty($wizard['data']['step1'])) {
            return redirect()->route('assembleia.passo.1', [
                'numero' => $numero,
            ]);
        }

        if (empty($wizard['data']['step2'])) {
            return redirect()->route('assembleia.passo.2', [
                'numero' => $numero,
            ]);
        }

        return $this->noCacheView('fichas.assembleia.revisao', [
            'evento' => $evento,
            'numero' => $numero,
            'wizard' => $wizard,
            'dados' => $wizard['data'],
        ]);
    }

    public function finish(Request $request, int $numero): RedirectResponse
    {
        $evento = $this->findEventoByNumero($numero);

        if ($evento === null) {
            return redirect('/fichas/naodisponivel');
        }

        $wizard = $this->getWizard($numero);

        if (empty($wizard['data']['step1'])) {
            return redirect()->route('assembleia.passo.1', [
                'numero' => $numero,
            ]);
        }

        if (empty($wizard['data']['step2'])) {
            return redirect()->route('assembleia.passo.2', [
                'numero' => $numero,
            ]);
        }

        $payload = $this->buildInscricaoPayload($evento, $wizard);

        $inscricao = InscricaoCursilho::updateOrCreate(
            [
                'evento_id' => $payload['evento_id'],
                'cpf' => $payload['cpf'],
            ],
            $payload
        );

        $mailViewData = $this->buildMailViewData($inscricao, $numero);
        $emailParticipante = trim((string) ($inscricao->email ?? ''));

        if ($emailParticipante !== '') {
            try {
                Mail::to($emailParticipante)->send(
                    new AssembleiaParticipanteMail($mailViewData)
                );
            } catch (\Throwable $e) {
                Log::warning('Falha ao enviar e-mail da assembleia ao participante.', [
                    'numero_evento' => $numero,
                    'inscricao_id' => $inscricao->id ?? null,
                    'email' => $emailParticipante,
                    'erro' => $e->getMessage(),
                ]);
            }
        }

        try {
            Mail::to('inscricao@mccbauru.com.br')->send(
                new AssembleiaInscricaoInterna($mailViewData)
            );
        } catch (\Throwable $e) {
            Log::error('Falha ao enviar e-mail interno da assembleia.', [
                'numero_evento' => $numero,
                'inscricao_id' => $inscricao->id ?? null,
                'erro' => $e->getMessage(),
            ]);
        }

        session()->forget($this->wizardKey($numero));

        return redirect()->route('assembleia.finalizado', [
            'numero' => $numero,
        ]);
    }

    public function finalizado(int $numero): Response|RedirectResponse
    {
        $evento = $this->findEventoByNumero($numero);

        if ($evento === null) {
            return redirect('/fichas/naodisponivel');
        }

        return $this->noCacheView('fichas.assembleia.finalizado', [
            'evento' => $evento,
            'numero' => $numero,
            'sexoLabel' => 'Assembleia',
        ]);
    }

    private function validateStep1(Request $request): array
    {
        $validator = Validator::make(
            $request->all(),
            [
                'agree' => ['required', 'accepted'],
            ],
            $this->messages()
        );

        return $validator->validate();
    }

    private function validateStep2(Request $request, object $evento): array
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nome' => ['required', 'string', 'min:3', 'max:255'],
                'data_nascimento' => ['required', 'date_format:d/m/Y'],
                'estado_civil' => [
                    'required',
                    'in:SOLTEIRO,CASADO,DIVORCIADO,VIUVO,UNIAO_ESTAVEL',
                ],
                'cpf' => ['required', 'string'],
                'email' => ['nullable', 'email', 'max:150'],
                'cep' => ['required', 'string'],
                'endereco' => ['required', 'string', 'max:255'],
                'bairro' => ['required', 'string', 'max:150'],
                'cidade' => ['required', 'string', 'max:150'],
                'estado' => ['required', 'size:2'],
                'paroquia' => ['required', 'string', 'max:255'],
            ],
            $this->messages()
        );

        $dados = $validator->validate();

        $dados['nome'] = mb_strtoupper(trim((string) $dados['nome']), 'UTF-8');
        $dados['endereco'] = mb_strtoupper(trim((string) $dados['endereco']), 'UTF-8');
        $dados['bairro'] = mb_strtoupper(trim((string) $dados['bairro']), 'UTF-8');
        $dados['cidade'] = mb_strtoupper(trim((string) $dados['cidade']), 'UTF-8');
        $dados['estado'] = mb_strtoupper(trim((string) $dados['estado']), 'UTF-8');
        $dados['paroquia'] = mb_strtoupper(trim((string) $dados['paroquia']), 'UTF-8');
        $dados['cpf'] = $this->formatCpf($this->onlyDigits($dados['cpf']));
        $dados['cep'] = $this->formatCep($dados['cep']);
        $dados['email'] = isset($dados['email']) && trim((string) $dados['email']) !== ''
            ? mb_strtolower(trim((string) $dados['email']), 'UTF-8')
            : null;

        if (!$this->isValidDataNascimento($dados['data_nascimento'])) {
            throw ValidationException::withMessages([
                'data_nascimento' => 'A data de nascimento é inválida ou a idade não pode ser maior que 100 anos.',
            ]);
        }

        if (!$this->isValidCpf($dados['cpf'])) {
            throw ValidationException::withMessages([
                'cpf' => 'CPF inválido.',
            ]);
        }

        $duplicada = InscricaoCursilho::query()
            ->where('evento_id', $evento->id)
            ->where('cpf', $dados['cpf'])
            ->exists();

        if ($duplicada) {
            throw ValidationException::withMessages([
                'cpf' => 'Já existe uma inscrição para este CPF neste evento.',
            ]);
        }

        return $dados;
    }

    private function buildInscricaoPayload(object $evento, array $wizard): array
    {
        $step2 = $wizard['data']['step2'] ?? [];

        return [
            'evento_id' => $evento->id,
            'tipo_evento' => $evento->tipo_evento,
            'publico_evento' => $evento->publico_evento,
            'numero_evento' => $evento->numero,
            'status_ficha' => InscricaoCursilho::STATUS_CANDIDATO,
            'aceitou_termo' => true,
            'finalizada_em' => now(),

            'nome' => (string) ($step2['nome'] ?? ''),
            'data_nascimento' => $this->convertDateBrToDatabase($step2['data_nascimento'] ?? null),
            'estado_civil' => (string) ($step2['estado_civil'] ?? ''),
            'cpf' => (string) ($step2['cpf'] ?? ''),
            'email' => $step2['email'] ?? null,

            'cep' => (string) ($step2['cep'] ?? ''),
            'endereco' => (string) ($step2['endereco'] ?? ''),
            'bairro' => (string) ($step2['bairro'] ?? ''),
            'cidade' => (string) ($step2['cidade'] ?? ''),
            'estado' => (string) ($step2['estado'] ?? ''),
            'paroquia' => (string) ($step2['paroquia'] ?? ''),

            'data_casamento' => null,
            'cidade_casou' => null,
            'igreja_casou' => null,
            'nome_mae' => null,
            'numero_filhos' => null,
            'profissao' => null,
            'telefone' => null,
            'grau_instrucao' => null,
            'participa_igreja' => null,
            'sacramento_batizado' => false,
            'sacramento_eucaristia' => false,
            'sacramento_crisma' => false,
            'participa_pastoral' => null,
            'quais_pastorais' => null,
            'contato_familia_missa' => null,
            'alimentacao_especial' => null,
            'padrinho_madrinha_contato' => null,

            'pagamento_confirmado' => false,
            'pagamento_data' => null,
            'pagamento_comprovante_base64' => null,
        ];
    }

    private function buildMailViewData(InscricaoCursilho $inscricao, int $numero): array
    {
        return [
            'publicoEvento' => 'assembleia',
            'sexo' => 'assembleia',
            'sexoLabel' => 'Assembleia',
            'numero' => $numero,
            'inscricao' => [
                'id' => $inscricao->id,
                'evento_id' => $inscricao->evento_id,
                'tipo_evento' => $inscricao->tipo_evento,
                'publico_evento' => $inscricao->publico_evento,
                'numero_evento' => $inscricao->numero_evento,
                'status_ficha' => $inscricao->status_ficha,
                'aceitou_termo' => $inscricao->aceitou_termo,
                'finalizada_em' => $inscricao->finalizada_em,
                'finalizada_em_br' => $this->formatDateTimeBr($inscricao->finalizada_em),
                'nome' => $inscricao->nome,
                'data_nascimento' => $inscricao->data_nascimento,
                'data_nascimento_br' => $this->formatDateBr($inscricao->data_nascimento),
                'estado_civil' => $inscricao->estado_civil,
                'cpf' => $inscricao->cpf,
                'email' => $inscricao->email,
                'cep' => $inscricao->cep,
                'endereco' => $inscricao->endereco,
                'bairro' => $inscricao->bairro,
                'cidade' => $inscricao->cidade,
                'estado' => $inscricao->estado,
                'paroquia' => $inscricao->paroquia,
            ],
            'bannerPath' => public_path('assets/img/banner.jpg'),
            'eventoImagePath' => public_path('assets/img/' . $numero . '.jpg'),
            'pixPath' => public_path('assets/img/pix.png'),
        ];
    }

    private function findPrimeiroEventoDisponivel(): ?object
    {
        $evento = DB::table('eventos')
            ->where('publico_evento', 'ASSEMBLEIA')
            ->where('status', 'ABERTO')
            ->where('ativo', 1)
            ->orderBy('numero')
            ->first();

        return $evento ?: null;
    }

    private function findEventoByNumero(int $numero): ?object
    {
        $evento = DB::table('eventos')
            ->where('publico_evento', 'ASSEMBLEIA')
            ->where('status', 'ABERTO')
            ->where('ativo', 1)
            ->where('numero', $numero)
            ->first();

        return $evento ?: null;
    }

    private function getWizard(int $numero): array
    {
        return session($this->wizardKey($numero), [
            'started' => false,
            'current_step' => 1,
            'data' => [
                'step1' => [],
                'step2' => [],
            ],
        ]);
    }

    private function putWizard(int $numero, array $wizard): void
    {
        session([
            $this->wizardKey($numero) => $wizard,
        ]);
    }

    private function wizardKey(int $numero): string
    {
        return self::SESSION_PREFIX . $numero;
    }

    private function onlyDigits(?string $valor): string
    {
        return preg_replace('/\D+/', '', (string) $valor) ?? '';
    }

    private function formatCep(?string $valor): string
    {
        $digits = $this->onlyDigits($valor);

        if (strlen($digits) !== 8) {
            return $digits;
        }

        return substr($digits, 0, 5) . '-' . substr($digits, 5, 3);
    }

    private function formatCpf(?string $valor): string
    {
        $digits = $this->onlyDigits($valor);

        if (strlen($digits) !== 11) {
            return $digits;
        }

        return substr($digits, 0, 3) . '.'
            . substr($digits, 3, 3) . '.'
            . substr($digits, 6, 3) . '-'
            . substr($digits, 9, 2);
    }

    private function isValidCpf(?string $cpf): bool
    {
        $cpf = $this->onlyDigits($cpf);

        if (strlen($cpf) !== 11) {
            return false;
        }

        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        $sum = 0;

        for ($i = 0, $w = 10; $i < 9; $i++, $w--) {
            $sum += ((int) $cpf[$i]) * $w;
        }

        $d1 = 11 - ($sum % 11);
        $d1 = $d1 >= 10 ? 0 : $d1;

        $sum = 0;

        for ($i = 0, $w = 11; $i < 10; $i++, $w--) {
            $sum += ((int) $cpf[$i]) * $w;
        }

        $d2 = 11 - ($sum % 11);
        $d2 = $d2 >= 10 ? 0 : $d2;

        return $cpf[9] == (string) $d1 && $cpf[10] == (string) $d2;
    }

    private function isValidDataNascimento(?string $date): bool
    {
        if ($date === null || trim($date) === '') {
            return false;
        }

        try {
            $parsed = Carbon::createFromFormat('d/m/Y', $date);
        } catch (\Throwable) {
            return false;
        }

        if ($parsed->format('d/m/Y') !== $date) {
            return false;
        }

        return $parsed->between(
            now()->copy()->subYears(100)->startOfDay(),
            now()->startOfDay()
        );
    }

    private function convertDateBrToDatabase(?string $date): ?string
    {
        if ($date === null || trim($date) === '') {
            return null;
        }

        try {
            $parsed = Carbon::createFromFormat('d/m/Y', $date);
        } catch (\Throwable) {
            return null;
        }

        if ($parsed->format('d/m/Y') !== $date) {
            return null;
        }

        return $parsed->format('Y-m-d');
    }

    private function formatDateBr(mixed $date): ?string
    {
        if ($date === null || $date === '') {
            return null;
        }

        try {
            return Carbon::parse($date)->format('d/m/Y');
        } catch (\Throwable) {
            return null;
        }
    }

    private function formatDateTimeBr(mixed $date): ?string
    {
        if ($date === null || $date === '') {
            return null;
        }

        try {
            return Carbon::parse($date)->format('d/m/Y H:i:s');
        } catch (\Throwable) {
            return null;
        }
    }

    private function noCacheView(string $view, array $data): Response
    {
        return response()
            ->view($view, $data)
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
    }

    private function messages(): array
    {
        return [
            'required' => 'Este campo é obrigatório.',
            'accepted' => 'Você precisa concordar para prosseguir.',
            'date_format' => 'Informe a data no formato DD/MM/AAAA.',
            'in' => 'Selecione uma opção válida.',
            'size' => 'Informe um valor válido.',
            'max' => 'O campo não pode exceder :max caracteres.',
            'min' => 'O campo deve ter no mínimo :min caracteres.',
            'email' => 'Informe um e-mail válido.',
        ];
    }
}