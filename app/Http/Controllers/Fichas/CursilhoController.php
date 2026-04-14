<?php

namespace App\Http\Controllers\Fichas;

use App\Http\Controllers\Controller;
use App\Mail\Fichas\CursilhoInscricaoInternaMail;
use App\Mail\Fichas\CursilhoParticipanteMail;
use App\Models\Evento;
use App\Models\InscricaoCursilho;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class CursilhoController extends Controller
{
    private const TOTAL_STEPS = 6;

    private function wizardKey(string $publicoEvento, int $numero): string
    {
        return "wizard.cursilho.$publicoEvento.$numero";
    }

    private function getWizard(Request $request, string $publicoEvento, int $numero): array
    {
        return $request->session()->get(
            $this->wizardKey($publicoEvento, $numero),
            [
                'started' => false,
                'steps' => [],
                'data' => [],
            ]
        );
    }

    private function putWizard(Request $request, string $publicoEvento, int $numero, array $wizard): void
    {
        $request->session()->put(
            $this->wizardKey($publicoEvento, $numero),
            $wizard
        );
    }

    private function forgetWizard(Request $request, string $publicoEvento, int $numero): void
    {
        $request->session()->forget($this->wizardKey($publicoEvento, $numero));
    }

    private function redirectToStep(string $publicoEvento, int $numero, int $step): string
    {
        return url("cursilho/$publicoEvento/$numero/passo/$step");
    }

    private function redirectToStart(string $publicoEvento, int $numero): string
    {
        return url("cursilho/$publicoEvento/$numero");
    }

    private function normalizePublicoEvento(string $publicoEvento): string
    {
        return match (mb_strtolower(trim($publicoEvento), 'UTF-8')) {
            'homens' => Evento::PUBLICO_HOMENS,
            'mulheres' => Evento::PUBLICO_MULHERES,
            'jovens' => Evento::PUBLICO_JOVENS,
            default => throw new NotFoundHttpException(),
        };
    }

    private function getPublicoEventoLabel(string $publicoEvento): string
    {
        return match (mb_strtolower(trim($publicoEvento), 'UTF-8')) {
            'homens' => 'Homens',
            'mulheres' => 'Mulheres',
            'jovens' => 'Jovens',
            default => ucfirst($publicoEvento),
        };
    }

    private function resolveEventoAberto(string $publicoEvento): Evento
    {
        $publicoEventoNormalizado = $this->normalizePublicoEvento($publicoEvento);

        $evento = Evento::query()
            ->where('tipo_evento', Evento::TIPO_EVENTO_CURSILHO)
            ->where('publico_evento', $publicoEventoNormalizado)
            ->where('ativo', true)
            ->where('status', Evento::STATUS_ABERTO)
            ->orderBy('id')
            ->first();

        abort_if($evento === null, 404);

        return $evento;
    }

    private function resolveEventoPorNumero(string $publicoEvento, int $numero): Evento
    {
        $publicoEventoNormalizado = $this->normalizePublicoEvento($publicoEvento);

        $evento = Evento::query()
            ->where('tipo_evento', Evento::TIPO_EVENTO_CURSILHO)
            ->where('publico_evento', $publicoEventoNormalizado)
            ->where('numero', $numero)
            ->where('ativo', true)
            ->where('status', Evento::STATUS_ABERTO)
            ->orderBy('id')
            ->first();

        abort_if($evento === null, 404);

        return $evento;
    }

    private function getStepFromRequest(Request $request): int
    {
        $segments = explode('/', trim($request->path(), '/'));
        $step = (int) end($segments);

        if ($step < 1 || $step > self::TOTAL_STEPS) {
            abort(404);
        }

        return $step;
    }

    private function guardStep(
        Request $request,
        string $publicoEvento,
        int $numero,
        int $step
    ): ?RedirectResponse {
        $wizard = $this->getWizard($request, $publicoEvento, $numero);

        if (!($wizard['steps']['start'] ?? false)) {
            return redirect($this->redirectToStart($publicoEvento, $numero));
        }

        if (($wizard['data']['duplicidade_bloqueada'] ?? false) === true) {
            return redirect()->route('cursilho.inscricaoconfirmada', [
                'publicoEvento' => $publicoEvento,
            ]);
        }

        if ($step <= 1) {
            return null;
        }

        $prev = $step - 1;

        if (!($wizard['steps']["step$prev"] ?? false)) {
            return redirect($this->redirectToStep($publicoEvento, $numero, $prev));
        }

        return null;
    }

    private function noCacheView(string $view, array $data): Response
    {
        return response()
            ->view($view, $data)
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
    }

    private function rulesForStep(int $step): array
    {
        return match ($step) {
            1 => [
                'agree' => ['required', 'accepted'],
            ],
            2 => [
                'nome' => ['required', 'string', 'min:3', 'max:120'],
                'data_nascimento' => ['required', 'date_format:d/m/Y'],
                'estado_civil' => ['required', 'in:SOLTEIRO,CASADO,DIVORCIADO,VIUVO,UNIAO_ESTAVEL'],
                'cpf' => ['required', 'string'],
            ],
            3 => [
                'data_casamento' => ['required', 'date_format:d/m/Y'],
                'cidade_casou' => ['required', 'string', 'min:4', 'max:160'],
                'igreja_casou' => ['required', 'string', 'min:2', 'max:100'],
            ],
            4 => [
                'nome_mae' => ['required', 'string', 'min:3', 'max:160'],
                'numero_filhos' => ['nullable', 'integer', 'min:0', 'max:30'],
                'profissao' => ['nullable', 'string', 'max:120'],
                'telefone' => ['required', 'string', 'min:8', 'max:20'],
                'email' => ['nullable', 'email', 'max:150'],
                'grau_instrucao' => [
                    'nullable',
                    'in:FUNDAMENTAL_INCOMPLETO,FUNDAMENTAL_COMPLETO,MEDIO_INCOMPLETO,MEDIO_COMPLETO,SUPERIOR_INCOMPLETO,SUPERIOR_COMPLETO,POS_GRADUACAO',
                ],
                'cep' => ['required', 'string'],
                'endereco' => ['required', 'string', 'min:3', 'max:180'],
                'bairro' => ['required', 'string', 'min:2', 'max:120'],
                'cidade' => ['required', 'string', 'min:2', 'max:120'],
                'estado' => ['required', 'size:2'],
                'sacramentos' => ['nullable', 'array'],
                'sacramentos.*' => ['in:BATIZADO,EUCARISTIA,CRISMA'],
                'participa_igreja' => ['required', 'in:NAO,SIM'],
            ],
            5 => [
                'paroquia' => ['required', 'string', 'min:2', 'max:160'],
                'participa_pastoral' => ['required', 'in:SIM,NAO'],
                'quais_pastorais' => ['nullable', 'string', 'min:2', 'max:300'],
            ],
            6 => [
                'contato_familia_missa' => ['required', 'string', 'min:5', 'max:600'],
                'alimentacao_especial' => ['required', 'string', 'min:3', 'max:800'],
                'padrinho_madrinha_contato' => ['required', 'string', 'min:5', 'max:600'],
            ],
            default => [],
        };
    }

    private function isWizardReadyForReview(array $wizard): bool
    {
        if (!($wizard['started'] ?? false)) {
            return false;
        }

        if (!($wizard['steps']['start'] ?? false)) {
            return false;
        }

        if (!($wizard['steps']['step1'] ?? false)) {
            return false;
        }

        if (!($wizard['steps']['step2'] ?? false)) {
            return false;
        }

        if (!($wizard['steps']['step4'] ?? false)) {
            return false;
        }

        if (!($wizard['steps']['step6'] ?? false)) {
            return false;
        }

        if ($this->isCasado($wizard) && !($wizard['steps']['step3'] ?? false)) {
            return false;
        }

        $participaIgreja = $wizard['data']['step4']['participa_igreja'] ?? null;

        if ($participaIgreja === 'SIM' && !($wizard['steps']['step5'] ?? false)) {
            return false;
        }

        return true;
    }

    public function startByPublico(Request $request, string $publicoEvento): RedirectResponse
    {
        $evento = $this->resolveEventoAberto($publicoEvento);

        return redirect(url("cursilho/$publicoEvento/{$evento->numero}"));
    }

    public function start(Request $request, string $publicoEvento, int $numero): RedirectResponse
    {
        $evento = $this->resolveEventoPorNumero($publicoEvento, $numero);

        $wizard = $this->getWizard($request, $publicoEvento, (int) $evento->numero);

        $wizard['started'] = true;
        $wizard['steps']['start'] = true;
        $wizard['data']['tipo_evento'] = Evento::TIPO_EVENTO_CURSILHO;
        $wizard['data']['publico_evento'] = $publicoEvento;
        $wizard['data']['numero'] = (int) $evento->numero;
        $wizard['data']['evento_id'] = $evento->id;

        $this->putWizard($request, $publicoEvento, (int) $evento->numero, $wizard);

        return redirect($this->redirectToStep($publicoEvento, (int) $evento->numero, 1));
    }

    public function step(Request $request, string $publicoEvento, int $numero): Response|RedirectResponse
    {
        $evento = $this->resolveEventoPorNumero($publicoEvento, $numero);

        $step = $this->getStepFromRequest($request);

        $guard = $this->guardStep($request, $publicoEvento, $numero, $step);

        if ($guard !== null) {
            return $guard;
        }

        $wizard = $this->getWizard($request, $publicoEvento, $numero);

        if (($wizard['data']['duplicidade_bloqueada'] ?? false) === true) {
            return redirect()->route('cursilho.inscricaoconfirmada', [
                'publicoEvento' => $publicoEvento,
            ]);
        }

        if ($step === 3 && !$this->isCasado($wizard)) {
            return redirect($this->redirectToStep($publicoEvento, $numero, 4));
        }

        if ($step === 5) {
            $participaIgreja = $wizard['data']['step4']['participa_igreja'] ?? null;

            if ($participaIgreja !== 'SIM') {
                return redirect($this->redirectToStep($publicoEvento, $numero, 6));
            }
        }

        return $this->noCacheView("fichas.cursilho.passo$step", [
            'evento' => $evento,
            'publicoEvento' => $publicoEvento,
            'sexo' => $publicoEvento,
            'sexoLabel' => $this->getPublicoEventoLabel($publicoEvento),
            'numero' => $numero,
            'wizard' => $wizard,
            'step' => $step,
            'totalSteps' => self::TOTAL_STEPS,
        ]);
    }

    public function storeStep(Request $request, string $publicoEvento, int $numero): RedirectResponse
    {
        $evento = $this->resolveEventoPorNumero($publicoEvento, $numero);

        $step = $this->getStepFromRequest($request);

        $guard = $this->guardStep($request, $publicoEvento, $numero, $step);

        if ($guard !== null) {
            return $guard;
        }

        $wizard = $this->getWizard($request, $publicoEvento, $numero);

        if (($wizard['data']['duplicidade_bloqueada'] ?? false) === true) {
            return redirect()->route('cursilho.inscricaoconfirmada', [
                'publicoEvento' => $publicoEvento,
            ]);
        }

        if ($step === 3 && !$this->isCasado($wizard)) {
            return redirect($this->redirectToStep($publicoEvento, $numero, 4));
        }

        if ($step === 5) {
            $participaIgreja = $wizard['data']['step4']['participa_igreja'] ?? null;

            if ($participaIgreja !== 'SIM') {
                $wizard['steps']['step5'] = true;
                $wizard['data']['step5'] = ['skipped' => true];
                $this->putWizard($request, $publicoEvento, $numero, $wizard);

                return redirect($this->redirectToStep($publicoEvento, $numero, 6));
            }
        }

        $validated = $request->validate($this->rulesForStep($step));

        if ($step === 1) {
            $wizard['steps']['step1'] = true;
            $wizard['data']['aceitou_termo'] = true;

            $this->putWizard($request, $publicoEvento, $numero, $wizard);

            return redirect($this->redirectToStep($publicoEvento, $numero, 2));
        }

        if ($step === 2) {
            $validated['nome'] = mb_strtoupper(trim((string) ($validated['nome'] ?? '')), 'UTF-8');

            if (!$this->isValidDataNascimento($validated['data_nascimento'] ?? null)) {
                return back()
                    ->withErrors([
                        'data_nascimento' => 'A data de nascimento é inválida ou a idade não pode ser maior que 100 anos.',
                    ])
                    ->withInput();
            }

            $cpfDigits = preg_replace('/\D+/', '', $validated['cpf'] ?? '');

            if (!$this->isValidCpf($cpfDigits)) {
                return back()
                    ->withErrors(['cpf' => 'CPF inválido.'])
                    ->withInput();
            }

            $cpfFormatado = $this->formatCpf($cpfDigits);

            $inscricaoExistente = InscricaoCursilho::query()
                ->where('evento_id', $evento->id)
                ->where('cpf', $cpfFormatado)
                ->exists();

            if ($inscricaoExistente) {
                $wizard['data']['cpf'] = $cpfFormatado;
                $wizard['data']['duplicidade_bloqueada'] = true;

                $this->putWizard($request, $publicoEvento, $numero, $wizard);

                return redirect()->route('cursilho.inscricaoconfirmada', [
                    'publicoEvento' => $publicoEvento,
                ]);
            }

            $validated['cpf'] = $cpfFormatado;
            $validated['duplicidade_bloqueada'] = false;
        }

        if ($step === 3) {
            $dataNascimento = $wizard['data']['step2']['data_nascimento'] ?? null;
            $dataCasamento = $validated['data_casamento'] ?? null;

            if (!$this->isDataPosterior($dataNascimento, $dataCasamento)) {
                return back()
                    ->withErrors([
                        'data_casamento' => 'A data de casamento deve ser maior que a data de nascimento e menor que a data de hoje.',
                    ])
                    ->withInput();
            }

            $validated['cidade_casou'] = trim((string) ($validated['cidade_casou'] ?? ''));
            $validated['igreja_casou'] = mb_strtoupper(
                trim((string) ($validated['igreja_casou'] ?? '')),
                'UTF-8'
            );
        }

        if ($step === 4) {
            $validated['nome_mae'] = mb_strtoupper(
                trim((string) ($validated['nome_mae'] ?? '')),
                'UTF-8'
            );

            $validated['profissao'] = $validated['profissao'] !== null
                ? mb_strtoupper(trim((string) $validated['profissao']), 'UTF-8')
                : null;

            $validated['cep'] = preg_replace('/\D+/', '', $validated['cep'] ?? '');
            $validated['telefone'] = preg_replace('/\D+/', '', $validated['telefone'] ?? '');

            $validated['endereco'] = mb_strtoupper(
                trim((string) ($validated['endereco'] ?? '')),
                'UTF-8'
            );

            $validated['bairro'] = mb_strtoupper(
                trim((string) ($validated['bairro'] ?? '')),
                'UTF-8'
            );

            $validated['cidade'] = mb_strtoupper(
                trim((string) ($validated['cidade'] ?? '')),
                'UTF-8'
            );

            $validated['estado'] = mb_strtoupper(
                trim((string) ($validated['estado'] ?? '')),
                'UTF-8'
            );

            if (strlen($validated['cep']) !== 8) {
                return back()
                    ->withErrors(['cep' => 'CEP inválido.'])
                    ->withInput();
            }
        }

        if ($step === 5) {
            $validated['paroquia'] = mb_strtoupper(
                trim((string) ($validated['paroquia'] ?? '')),
                'UTF-8'
            );

            if (($validated['participa_pastoral'] ?? null) === 'SIM') {
                $quaisPastorais = trim((string) ($validated['quais_pastorais'] ?? ''));

                if ($quaisPastorais === '') {
                    return back()
                        ->withErrors(['quais_pastorais' => 'Informe quais pastorais.'])
                        ->withInput();
                }

                $validated['quais_pastorais'] = $quaisPastorais;
            } else {
                $validated['quais_pastorais'] = null;
            }
        }

        if ($step === 2 && isset($validated['duplicidade_bloqueada'])) {
            $wizard['data']['duplicidade_bloqueada'] = (bool) $validated['duplicidade_bloqueada'];
            unset($validated['duplicidade_bloqueada']);
        }

        $wizard['data']["step{$step}"] = $validated;
        $wizard['steps']["step{$step}"] = true;

        $this->putWizard($request, $publicoEvento, $numero, $wizard);

        if ($step === 2) {
            $wizard = $this->getWizard($request, $publicoEvento, $numero);

            if ($this->isCasado($wizard)) {
                return redirect($this->redirectToStep($publicoEvento, $numero, 3));
            }

            $wizard['steps']['step3'] = true;
            $wizard['data']['step3'] = ['skipped' => true];
            $this->putWizard($request, $publicoEvento, $numero, $wizard);

            return redirect($this->redirectToStep($publicoEvento, $numero, 4));
        }

        if ($step === 4) {
            $wizard = $this->getWizard($request, $publicoEvento, $numero);
            $participaIgreja = $wizard['data']['step4']['participa_igreja'] ?? null;

            if ($participaIgreja === 'SIM') {
                return redirect($this->redirectToStep($publicoEvento, $numero, 5));
            }

            $wizard['steps']['step5'] = true;
            $wizard['data']['step5'] = ['skipped' => true];
            $this->putWizard($request, $publicoEvento, $numero, $wizard);

            return redirect($this->redirectToStep($publicoEvento, $numero, 6));
        }

        if ($step < self::TOTAL_STEPS) {
            return redirect($this->redirectToStep($publicoEvento, $numero, $step + 1));
        }

        return redirect(url("cursilho/$publicoEvento/$numero/revisao"));
    }

    public function review(Request $request, string $publicoEvento, int $numero): Response|RedirectResponse
    {
        $evento = $this->resolveEventoPorNumero($publicoEvento, $numero);

        $wizard = $this->getWizard($request, $publicoEvento, $numero);

        if (($wizard['data']['duplicidade_bloqueada'] ?? false) === true) {
            return redirect()->route('cursilho.inscricaoconfirmada', [
                'publicoEvento' => $publicoEvento,
            ]);
        }

        if (!$this->isWizardReadyForReview($wizard)) {
            return redirect($this->redirectToStep($publicoEvento, $numero, 1));
        }

        return $this->noCacheView('fichas.cursilho.revisao', [
            'evento' => $evento,
            'publicoEvento' => $publicoEvento,
            'sexo' => $publicoEvento,
            'sexoLabel' => $this->getPublicoEventoLabel($publicoEvento),
            'numero' => $numero,
            'wizard' => $wizard,
        ]);
    }

    public function finish(Request $request, string $publicoEvento, int $numero): Response|RedirectResponse
    {
        $evento = $this->resolveEventoPorNumero($publicoEvento, $numero);

        $wizard = $this->getWizard($request, $publicoEvento, $numero);

        if (($wizard['data']['duplicidade_bloqueada'] ?? false) === true) {
            return redirect()->route('cursilho.inscricaoconfirmada', [
                'publicoEvento' => $publicoEvento,
            ]);
        }

        if (!$this->isWizardReadyForReview($wizard)) {
            return redirect($this->redirectToStep($publicoEvento, $numero, 1));
        }

        $payload = $this->buildInscricaoPayload($evento, $wizard);

        $inscricao = InscricaoCursilho::updateOrCreate(
            [
                'evento_id' => $payload['evento_id'],
                'cpf' => $payload['cpf'],
            ],
            $payload
        );

        $mailViewData = $this->buildMailViewData(
            $inscricao->fresh(),
            $publicoEvento,
            $numero
        );

        $emailParticipante = trim((string) ($inscricao->email ?? ''));

        if ($emailParticipante !== '') {
            try {
                Mail::to($emailParticipante)->send(
                    new CursilhoParticipanteMail($mailViewData)
                );
            } catch (Throwable $e) {
                report($e);
            }
        }

        try {
            Mail::to('inscricoes@mccbauru.com.br')->send(
                new CursilhoInscricaoInternaMail($mailViewData)
            );
        } catch (Throwable $e) {
            report($e);
        }

        $this->forgetWizard($request, $publicoEvento, $numero);

        return $this->noCacheView('fichas.cursilho.finalizado', [
            'evento' => $evento,
            'publicoEvento' => $publicoEvento,
            'sexo' => $publicoEvento,
            'sexoLabel' => $this->getPublicoEventoLabel($publicoEvento),
            'numero' => $numero,
        ]);
    }

    public function inscricaoConfirmada(Request $request, string $publicoEvento): Response|RedirectResponse
    {
        if ($request->boolean('voltar')) {
            $this->forgetAllCursilhoWizards($request);

            $evento = $this->resolveEventoAberto($publicoEvento);

            return redirect($this->redirectToStart($publicoEvento, (int) $evento->numero));
        }

        return $this->noCacheView('fichas.cursilho.inscricaoconfirmada', [
            'publicoEvento' => $publicoEvento,
            'sexo' => $publicoEvento,
            'sexoLabel' => $this->getPublicoEventoLabel($publicoEvento),
        ]);
    }

    private function isValidCpf(?string $cpf): bool
    {
        if ($cpf === null) {
            return false;
        }

        $cpf = preg_replace('/\D+/', '', $cpf);

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
        $d1 = ($d1 >= 10) ? 0 : $d1;

        $sum = 0;

        for ($i = 0, $w = 11; $i < 10; $i++, $w--) {
            $sum += ((int) $cpf[$i]) * $w;
        }

        $d2 = 11 - ($sum % 11);
        $d2 = ($d2 >= 10) ? 0 : $d2;

        return $d1 === (int) $cpf[9] && $d2 === (int) $cpf[10];
    }

    private function formatCpf(string $cpfDigits): string
    {
        return substr($cpfDigits, 0, 3) . '.'
            . substr($cpfDigits, 3, 3) . '.'
            . substr($cpfDigits, 6, 3) . '-'
            . substr($cpfDigits, 9, 2);
    }

    private function isCasado(array $wizard): bool
    {
        $estado = $wizard['data']['step2']['estado_civil'] ?? null;

        return $estado === 'CASADO';
    }

    private function isValidDataNascimento(?string $dataNascimento): bool
    {
        if ($dataNascimento === null || trim($dataNascimento) === '') {
            return false;
        }

        $dataNascimento = trim($dataNascimento);

        if (!preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $dataNascimento)) {
            return false;
        }

        try {
            $data = Carbon::createFromFormat('d/m/Y', $dataNascimento);
        } catch (Throwable) {
            return false;
        }

        if ($data->format('d/m/Y') !== $dataNascimento) {
            return false;
        }

        if ($data->isFuture()) {
            return false;
        }

        return $data->age <= 100;
    }

    private function isDataPosterior(?string $dataInicial, ?string $dataFinal): bool
    {
        if ($dataInicial === null || $dataFinal === null) {
            return false;
        }

        $dataInicial = trim($dataInicial);
        $dataFinal = trim($dataFinal);

        if (!preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $dataInicial)) {
            return false;
        }

        if (!preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $dataFinal)) {
            return false;
        }

        try {
            $inicio = Carbon::createFromFormat('d/m/Y', $dataInicial)->startOfDay();
            $fim = Carbon::createFromFormat('d/m/Y', $dataFinal)->startOfDay();
            $hoje = Carbon::today();
        } catch (Throwable) {
            return false;
        }

        if ($inicio->format('d/m/Y') !== $dataInicial) {
            return false;
        }

        if ($fim->format('d/m/Y') !== $dataFinal) {
            return false;
        }

        if (!$fim->greaterThan($inicio)) {
            return false;
        }

        return $fim->lessThan($hoje);
    }

    private function convertDateBrToDatabase(?string $date): ?string
    {
        if ($date === null || trim($date) === '') {
            return null;
        }

        $date = trim($date);

        try {
            $parsed = Carbon::createFromFormat('d/m/Y', $date);
        } catch (Throwable) {
            return null;
        }

        if ($parsed->format('d/m/Y') !== $date) {
            return null;
        }

        return $parsed->format('Y-m-d');
    }

    private function buildInscricaoPayload(Evento $evento, array $wizard): array
    {
        $step2 = $wizard['data']['step2'] ?? [];
        $step3 = $wizard['data']['step3'] ?? [];
        $step4 = $wizard['data']['step4'] ?? [];
        $step5 = $wizard['data']['step5'] ?? [];
        $step6 = $wizard['data']['step6'] ?? [];

        $sacramentos = $step4['sacramentos'] ?? [];

        if (!is_array($sacramentos)) {
            $sacramentos = [];
        }

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

            'data_casamento' => isset($step3['skipped'])
                ? null
                : $this->convertDateBrToDatabase($step3['data_casamento'] ?? null),
            'cidade_casou' => isset($step3['skipped'])
                ? null
                : ($step3['cidade_casou'] ?? null),
            'igreja_casou' => isset($step3['skipped'])
                ? null
                : ($step3['igreja_casou'] ?? null),

            'nome_mae' => (string) ($step4['nome_mae'] ?? ''),
            'numero_filhos' => ($step4['numero_filhos'] ?? '') !== '' ? ($step4['numero_filhos'] ?? null) : null,
            'profissao' => $step4['profissao'] ?? null,
            'telefone' => (string) ($step4['telefone'] ?? ''),
            'email' => $step4['email'] ?? null,
            'grau_instrucao' => $step4['grau_instrucao'] ?? null,
            'cep' => $this->formatCep($step4['cep'] ?? ''),
            'endereco' => (string) ($step4['endereco'] ?? ''),
            'bairro' => (string) ($step4['bairro'] ?? ''),
            'cidade' => (string) ($step4['cidade'] ?? ''),
            'estado' => (string) ($step4['estado'] ?? ''),
            'participa_igreja' => (string) ($step4['participa_igreja'] ?? ''),

            'sacramento_batizado' => in_array('BATIZADO', $sacramentos, true),
            'sacramento_eucaristia' => in_array('EUCARISTIA', $sacramentos, true),
            'sacramento_crisma' => in_array('CRISMA', $sacramentos, true),

            'paroquia' => isset($step5['skipped']) ? null : ($step5['paroquia'] ?? null),
            'participa_pastoral' => isset($step5['skipped']) ? null : ($step5['participa_pastoral'] ?? null),
            'quais_pastorais' => isset($step5['skipped']) ? null : ($step5['quais_pastorais'] ?? null),

            'contato_familia_missa' => (string) ($step6['contato_familia_missa'] ?? ''),
            'alimentacao_especial' => (string) ($step6['alimentacao_especial'] ?? ''),
            'padrinho_madrinha_contato' => (string) ($step6['padrinho_madrinha_contato'] ?? ''),

            'pagamento_confirmado' => false,
            'pagamento_data' => null,
            'pagamento_comprovante_base64' => null,
        ];
    }

    private function formatCep(string $cepDigits): string
    {
        $cepDigits = preg_replace('/\D+/', '', $cepDigits);

        if (strlen($cepDigits) !== 8) {
            return $cepDigits;
        }

        return substr($cepDigits, 0, 5) . '-' . substr($cepDigits, 5, 3);
    }

    private function buildMailViewData(
        InscricaoCursilho $inscricao,
        string $publicoEvento,
        int $numero
    ): array {
        return [
            'publicoEvento' => $publicoEvento,
            'sexo' => $publicoEvento,
            'sexoLabel' => $this->getPublicoEventoLabel($publicoEvento),
            'numero' => $numero,
            'inscricao' => $this->transformInscricaoForEmail($inscricao),
            'bannerPath' => public_path('assets/img/banner.jpg'),
            'eventoImagePath' => public_path('assets/img/' . $numero . '.jpg'),
            'pixPath' => public_path('assets/img/pix.png'),
        ];
    }

    private function transformInscricaoForEmail(InscricaoCursilho $inscricao): array
    {
        return [
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

            'data_casamento' => $inscricao->data_casamento,
            'data_casamento_br' => $this->formatDateBr($inscricao->data_casamento),
            'cidade_casou' => $inscricao->cidade_casou,
            'igreja_casou' => $inscricao->igreja_casou,

            'nome_mae' => $inscricao->nome_mae,
            'numero_filhos' => $inscricao->numero_filhos,
            'profissao' => $inscricao->profissao,
            'telefone' => $inscricao->telefone,
            'telefone_formatado' => $this->formatPhone($inscricao->telefone),
            'email' => $inscricao->email,
            'grau_instrucao' => $inscricao->grau_instrucao,
            'cep' => $inscricao->cep,
            'endereco' => $inscricao->endereco,
            'bairro' => $inscricao->bairro,
            'cidade' => $inscricao->cidade,
            'estado' => $inscricao->estado,
            'participa_igreja' => $inscricao->participa_igreja,

            'sacramento_batizado' => (bool) $inscricao->sacramento_batizado,
            'sacramento_eucaristia' => (bool) $inscricao->sacramento_eucaristia,
            'sacramento_crisma' => (bool) $inscricao->sacramento_crisma,

            'paroquia' => $inscricao->paroquia,
            'participa_pastoral' => $inscricao->participa_pastoral,
            'quais_pastorais' => $inscricao->quais_pastorais,

            'contato_familia_missa' => $inscricao->contato_familia_missa,
            'alimentacao_especial' => $inscricao->alimentacao_especial,
            'padrinho_madrinha_contato' => $inscricao->padrinho_madrinha_contato,
        ];
    }

    private function formatDateBr(mixed $date): ?string
    {
        if ($date === null || $date === '') {
            return null;
        }

        try {
            return Carbon::parse($date)->format('d/m/Y');
        } catch (Throwable) {
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
        } catch (Throwable) {
            return null;
        }
    }

    private function formatPhone(?string $phone): ?string
    {
        if ($phone === null) {
            return null;
        }

        $digits = preg_replace('/\D+/', '', $phone);

        if (strlen($digits) === 10) {
            return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $digits);
        }

        if (strlen($digits) === 11) {
            return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $digits);
        }

        return $phone;
    }

    private function forgetAllCursilhoWizards(Request $request): void
    {
        $sessionData = $request->session()->all();

        foreach (array_keys($sessionData) as $key) {
            if (is_string($key) && str_starts_with($key, 'wizard.cursilho.')) {
                $request->session()->forget($key);
            }
        }
    }
}