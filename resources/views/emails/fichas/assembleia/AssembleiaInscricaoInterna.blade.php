<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Nova inscrição - Assembleia Diocesana {{ $numero ?? '' }}</title>
</head>
<body style="margin:0; padding:0; background:#f4f6fb; font-family:Arial, Helvetica, sans-serif; color:#111827;">
  <div style="width:100%; background:#f4f6fb; padding:24px 12px;">
    <div style="max-width:760px; margin:0 auto; background:#ffffff; border:1px solid #e5e7eb; border-radius:14px; overflow:hidden; box-shadow:0 10px 30px rgba(17,24,39,.10);">

      @if(!empty($bannerPath) && file_exists($bannerPath))
        <div style="width:100%; background:#dbeafe;">
          <img
            src="{{ $message->embed($bannerPath) }}"
            alt="Banner MCC"
            style="display:block; width:100%; height:auto;"
          >
        </div>
      @endif

      <div style="padding:28px 24px 10px 24px;">
        <h1 style="margin:0 0 8px 0; font-size:24px; line-height:1.25; color:#111827;">
          Nova inscrição recebida
        </h1>

        <p style="margin:0 0 18px 0; font-size:14px; color:#4b5563;">
          Assembleia Diocesana {{ $numero ?? '' }} — Notificação interna
        </p>

        <p style="margin:0 0 14px 0; font-size:16px; line-height:1.7;">
          Foi registrada uma nova inscrição na
          <strong>Assembleia Diocesana {{ $numero ?? '' }}</strong>.
        </p>
      </div>

      <div style="padding:0 24px 8px 24px;">
        <div style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden;">
          <div style="background:#a9bfe6; color:#0f172a; font-weight:700; padding:10px 14px; font-size:14px;">
            Dados da inscrição
          </div>

          <div style="padding:14px;">
            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse;">
              <tr>
                <td style="padding:8px 0; width:220px; font-weight:700; vertical-align:top;">ID da inscrição</td>
                <td style="padding:8px 0;">{{ $inscricao['id'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Evento ID</td>
                <td style="padding:8px 0;">{{ $inscricao['evento_id'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Tipo de evento</td>
                <td style="padding:8px 0;">{{ $inscricao['tipo_evento'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Público do evento</td>
                <td style="padding:8px 0;">{{ $inscricao['publico_evento'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Número do evento</td>
                <td style="padding:8px 0;">{{ $inscricao['numero_evento'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Status da ficha</td>
                <td style="padding:8px 0;">{{ $inscricao['status_ficha'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Nome</td>
                <td style="padding:8px 0;">{{ $inscricao['nome'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Data de nascimento</td>
                <td style="padding:8px 0;">{{ $inscricao['data_nascimento_br'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Estado civil</td>
                <td style="padding:8px 0;">{{ $inscricao['estado_civil'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">CPF</td>
                <td style="padding:8px 0;">{{ $inscricao['cpf'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">E-mail</td>
                <td style="padding:8px 0;">{{ $inscricao['email'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">CEP</td>
                <td style="padding:8px 0;">{{ $inscricao['cep'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Endereço</td>
                <td style="padding:8px 0;">{{ $inscricao['endereco'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Bairro</td>
                <td style="padding:8px 0;">{{ $inscricao['bairro'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Cidade / Estado</td>
                <td style="padding:8px 0;">
                  {{ $inscricao['cidade'] ?? '-' }}{{ !empty($inscricao['estado']) ? ' / '.$inscricao['estado'] : '' }}
                </td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Paróquia</td>
                <td style="padding:8px 0;">{{ $inscricao['paroquia'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="padding:8px 0; font-weight:700; vertical-align:top;">Finalizada em</td>
                <td style="padding:8px 0;">{{ $inscricao['finalizada_em_br'] ?? '-' }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div style="padding:10px 24px 22px 24px;">
        <p style="margin:0; font-size:14px; color:#4b5563; line-height:1.6;">
          Este e-mail foi enviado automaticamente pelo sistema de inscrições da Assembleia.
        </p>
      </div>

      <div style="padding:14px 24px; border-top:1px solid #e5e7eb; font-size:12px; color:#6b7280;">
        Assembleia Diocesana {{ $numero ?? '' }} • GED Bauru • Movimento de Cursilho
      </div>
    </div>
  </div>
</body>
</html>