<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Nova inscrição recebida</title>
</head>
<body style="margin:0;padding:0;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;color:#111827;">
@php
    $dados = $inscricao ?? [];

    $bannerCid = null;

    if (isset($message) && !empty($bannerPath) && file_exists($bannerPath)) {
        $bannerCid = $message->embed($bannerPath);
    }

    $sacramentos = [];

    if (!empty($dados['sacramento_batizado'])) {
        $sacramentos[] = 'BATIZADO';
    }

    if (!empty($dados['sacramento_eucaristia'])) {
        $sacramentos[] = 'EUCARISTIA';
    }

    if (!empty($dados['sacramento_crisma'])) {
        $sacramentos[] = 'CRISMA';
    }

    $sacramentosTexto = count($sacramentos) > 0 ? implode(', ', $sacramentos) : '-';

    $showStep3 = !empty($dados['data_casamento']) || !empty($dados['cidade_casou']) || !empty($dados['igreja_casou']);
    $showStep5 = !empty($dados['paroquia']) || !empty($dados['participa_pastoral']) || !empty($dados['quais_pastorais']);
@endphp

<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#f4f6fb;margin:0;padding:24px 0;">
    <tr>
        <td align="center">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="max-width:860px;background:#ffffff;border:1px solid #e5e7eb;border-radius:14px;overflow:hidden;">
                <tr>
                    <td>
                        @if($bannerCid)
                            <img src="{{ $bannerCid }}" alt="Banner do MCC" style="display:block;width:100%;height:auto;border:0;">
                        @else
                            <div style="padding:24px;background:#c7d2fe;text-align:center;font-weight:bold;">
                                MCC Bauru
                            </div>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td style="padding:28px;">
                        <h1 style="margin:0 0 8px;font-size:28px;line-height:1.2;color:#111827;">
                            Nova inscrição recebida
                        </h1>

                        <p style="margin:0 0 18px;font-size:15px;line-height:1.6;color:#4b5563;">
                            {{ $numero }}º Cursilho para {{ strtoupper($sexoLabel) }} — GED Bauru - Grupo Executivo Diocesano - Bauru / SP
                        </p>

                        <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                            <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                Dados pessoais
                            </div>
                            <div style="padding:12px 16px;">
                                <p style="margin:0 0 10px;"><strong>Nome:</strong> {{ $dados['nome'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Data de nascimento:</strong> {{ $dados['data_nascimento_br'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Estado civil:</strong> {{ $dados['estado_civil'] ?? '-' }}</p>
                                <p style="margin:0;"><strong>CPF:</strong> {{ $dados['cpf'] ?? '-' }}</p>
                            </div>
                        </div>

                        @if($showStep3)
                            <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                                <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                    Sobre o casamento
                                </div>
                                <div style="padding:12px 16px;">
                                    <p style="margin:0 0 10px;"><strong>Data do casamento:</strong> {{ $dados['data_casamento_br'] ?? '-' }}</p>
                                    <p style="margin:0 0 10px;"><strong>Cidade que casou:</strong> {{ $dados['cidade_casou'] ?? '-' }}</p>
                                    <p style="margin:0;"><strong>Igreja em que casou:</strong> {{ $dados['igreja_casou'] ?? '-' }}</p>
                                </div>
                            </div>
                        @endif

                        <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                            <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                Outras informações
                            </div>
                            <div style="padding:12px 16px;">
                                <p style="margin:0 0 10px;"><strong>Nome da mãe:</strong> {{ $dados['nome_mae'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Número de filhos:</strong> {{ $dados['numero_filhos'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Profissão:</strong> {{ $dados['profissao'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Telefone:</strong> {{ $dados['telefone_formatado'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>E-mail:</strong> {{ $dados['email'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Grau de instrução:</strong> {{ $dados['grau_instrucao'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>CEP:</strong> {{ $dados['cep'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Endereço:</strong> {{ $dados['endereco'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Bairro:</strong> {{ $dados['bairro'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Cidade:</strong> {{ $dados['cidade'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Estado (UF):</strong> {{ $dados['estado'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Sacramentos:</strong> {{ $sacramentosTexto }}</p>
                                <p style="margin:0;"><strong>Participa da Igreja Católica Apostólica Romana?</strong> {{ $dados['participa_igreja'] ?? '-' }}</p>
                            </div>
                        </div>

                        @if($showStep5)
                            <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                                <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                    Pastoral
                                </div>
                                <div style="padding:12px 16px;">
                                    <p style="margin:0 0 10px;"><strong>Paróquia:</strong> {{ $dados['paroquia'] ?? '-' }}</p>
                                    <p style="margin:0 0 10px;"><strong>Participa de alguma pastoral?</strong> {{ $dados['participa_pastoral'] ?? '-' }}</p>
                                    <p style="margin:0;"><strong>Quais pastorais:</strong> {{ $dados['quais_pastorais'] ?? '-' }}</p>
                                </div>
                            </div>
                        @endif

                        <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                            <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                Informações finais
                            </div>
                            <div style="padding:12px 16px;">
                                <p style="margin:0 0 10px;"><strong>Contato da família (missa de encerramento):</strong><br>{{ $dados['contato_familia_missa'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Alimentação especial:</strong><br>{{ $dados['alimentacao_especial'] ?? '-' }}</p>
                                <p style="margin:0;"><strong>Padrinho/Madrinha (nome e fone):</strong><br>{{ $dados['padrinho_madrinha_contato'] ?? '-' }}</p>
                            </div>
                        </div>

                        <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                            <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                Dados técnicos da inscrição
                            </div>
                            <div style="padding:12px 16px;">
                                <p style="margin:0 0 10px;"><strong>Evento ID:</strong> {{ $dados['evento_id'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Número do evento:</strong> {{ $dados['numero_evento'] ?? '-' }}</p>
                                <p style="margin:0 0 10px;"><strong>Público:</strong> {{ $dados['publico_evento'] ?? '-' }}</p>
                                <p style="margin:0;"><strong>Finalizada em:</strong> {{ $dados['finalizada_em_br'] ?? '-' }}</p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px 18px;border-top:1px solid #e5e7eb;color:#4b5563;font-size:12px;">
                        E-mail interno de inscrição • {{ strtoupper($sexoLabel) }} / {{ $numero }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>