<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Confirmação de inscrição - Assembleia Diocesana {{ $numero ?? '' }}</title>
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
        <h1 style="margin:0 0 8px 0; font-size:26px; line-height:1.25; color:#111827;">
          Inscrição confirmada ✅
        </h1>

        <p style="margin:0 0 18px 0; font-size:14px; color:#4b5563;">
          Assembleia Diocesana {{ $numero ?? '' }} — GED Bauru / Movimento de Cursilho
        </p>

        <p style="margin:0 0 14px 0; font-size:16px; line-height:1.7;">
          <strong>Querido irmão, querida irmã,</strong>
        </p>

        <p style="margin:0 0 14px 0; font-size:16px; line-height:1.7;">
          Recebemos com alegria a sua inscrição para a
          <strong>Assembleia Diocesana {{ $numero ?? '' }}</strong>.
          Agradecemos o seu “sim” e sua disponibilidade para participar deste momento
          tão importante para o <strong>GED Bauru</strong> e para toda a caminhada do
          <strong>Movimento de Cursilho</strong>.
        </p>

        <p style="margin:0 0 14px 0; font-size:16px; line-height:1.7;">
          A Assembleia é um tempo especial de encontro, fraternidade, escuta e comunhão.
          Sua presença é muito valiosa e contribui para fortalecer nossa missão, renovar
          nosso ardor evangelizador e unir ainda mais os irmãos e irmãs que caminham
          juntos na fé.
        </p>

        <p style="margin:0 0 14px 0; font-size:16px; line-height:1.7;">
          Abaixo seguem os dados da sua inscrição:
        </p>
      </div>

      <div style="padding:0 24px 8px 24px;">
        <div style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden;">
          <div style="background:#a9bfe6; color:#0f172a; font-weight:700; padding:10px 14px; font-size:14px;">
            Dados do inscrito
          </div>

          <div style="padding:14px;">
            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse;">
              <tr>
                <td style="padding:8px 0; width:220px; font-weight:700; vertical-align:top;">Nome</td>
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
        <p style="margin:0 0 14px 0; font-size:16px; line-height:1.7;">
          Que Deus abençoe sua caminhada e que esta Assembleia seja um tempo de graça,
          luz, discernimento e renovação para todos nós.
        </p>

        <p style="margin:0 0 14px 0; font-size:16px; line-height:1.7;">
          <strong>Nos encontramos em breve, com alegria e esperança.</strong>
        </p>

        <p style="margin:18px 0 0 0; font-size:14px; color:#4b5563; line-height:1.6;">
          Este e-mail confirma o recebimento da sua inscrição.
        </p>
      </div>

      <div style="padding:14px 24px; border-top:1px solid #e5e7eb; font-size:12px; color:#6b7280;">
        Assembleia Diocesana {{ $numero ?? '' }} • GED Bauru • Movimento de Cursilho
      </div>
    </div>
  </div>
</body>
</html>