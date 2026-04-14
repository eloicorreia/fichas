<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inscrição Assembleia Diocesana — Revisão — {{ $numero }}º</title>

  <style>
    :root{
      --bg:#f4f6fb;
      --card:#fff;
      --text:#111827;
      --muted:#4b5563;
      --border:#e5e7eb;
      --shadow:0 10px 30px rgba(17,24,39,.10);
      --radius:14px;
      --primary:#2563eb;
      --primary-hover:#1d4ed8;
    }

    *{ box-sizing:border-box; }

    body{
      margin:0;
      font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,Arial,"Noto Sans","Liberation Sans",sans-serif;
      color:var(--text);
      background:var(--bg);
      line-height:1.55;
    }

    .wrap{
      min-height:100vh;
      padding:16px;
      display:flex;
      align-items:flex-start;
      justify-content:center;
    }

    .card{
      width:100%;
      max-width:860px;
      background:var(--card);
      border:1px solid var(--border);
      border-radius:var(--radius);
      overflow:hidden;
      box-shadow:var(--shadow);
    }

    .banner{
      width:100%;
      height:140px;
      background:#c7d2fe;
    }

    .banner img{
      width:100%;
      height:100%;
      object-fit:cover;
      display:block;
    }

    .content{
      padding:18px 18px 22px;
    }

    .title{
      margin:0 0 6px;
      font-size:22px;
      letter-spacing:.2px;
    }

    .subtitle{
      margin:0 0 14px;
      color:var(--muted);
      font-size:14px;
    }

    .badge{
      display:flex;
      align-items:center;
      justify-content:center;
      padding:10px 12px;
      border-radius:12px;
      background:#a9bfe6;
      border:1px solid var(--border);
      font-size:13px;
      margin:10px 0 16px;
      width:100%;
      max-width:100%;
    }

    .badge span{
      width:100%;
      text-align:center;
      font-weight:700;
    }

    .section{
      margin-top:14px;
      border:1px solid var(--border);
      border-radius:12px;
      overflow:hidden;
      background:#fff;
    }

    .section-head{
      background:#a9bfe6;
      color:#0f172a;
      font-weight:900;
      padding:10px 12px;
      font-size:14px;
    }

    .section-body{
      padding:12px;
    }

    .row{
      padding:10px 0;
      border-bottom:1px solid var(--border);
    }

    .row:last-child{
      border-bottom:0;
    }

    .k{
      font-size:12px;
      letter-spacing:.4px;
      color:var(--muted);
      font-weight:800;
      margin-bottom:4px;
    }

    .v{
      font-size:15px;
      color:var(--text);
      white-space:pre-wrap;
    }

    .actions{
      margin-top:16px;
      display:flex;
      gap:10px;
      flex-wrap:wrap;
    }

    .btn{
      appearance:none;
      border:0;
      border-radius:10px;
      padding:12px 16px;
      font-weight:800;
      font-size:15px;
      cursor:pointer;
      user-select:none;
    }

    .btn-primary{
      background:var(--primary);
      color:#fff;
    }

    .btn-primary:hover{
      background:var(--primary-hover);
    }

    .btn-link{
      background:transparent;
      border:1px solid var(--border);
      color:var(--text);
      text-decoration:none;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      padding:12px 16px;
      border-radius:10px;
      font-weight:800;
      font-size:15px;
    }

    .pix-box{
      display:grid;
      grid-template-columns:1fr;
      gap:20px;
      align-items:start;
    }

    .pix-info{
      display:flex;
      flex-direction:column;
      gap:14px;
    }

    .pix-line{
      margin:0;
      font-size:16px;
      line-height:1.65;
    }

    .pix-line strong{
      font-weight:900;
    }

    .pix-qr-wrap{
      display:flex;
      align-items:center;
      justify-content:center;
    }

    .pix-qr{
      width:100%;
      max-width:320px;
      border:1px solid var(--border);
      border-radius:12px;
      overflow:hidden;
      background:#fff;
      padding:10px;
    }

    .pix-qr img{
      width:100%;
      height:auto;
      display:block;
    }

    .pix-note{
      margin-top:4px;
      font-size:13px;
      color:var(--muted);
    }

    .footer{
      padding:14px 18px;
      border-top:1px solid var(--border);
      color:var(--muted);
      font-size:12px;
    }

    @media (min-width:768px){
      .wrap{ padding:28px; }
      .banner{ height:180px; }
      .content{ padding:26px 28px 30px; }
      .title{ font-size:28px; }
      .subtitle{ font-size:15px; }
    }

    @media (min-width:900px){
      .pix-box{
        grid-template-columns:minmax(0, 1.2fr) minmax(280px, 340px);
        gap:28px;
      }

      .pix-qr-wrap{
        justify-content:flex-end;
      }
    }
  </style>
</head>

@php
  $step1 = $wizard['data']['step1'] ?? [];
  $step2 = $wizard['data']['step2'] ?? [];

  $cpf = $step2['cpf'] ?? '';
  if (is_string($cpf) && preg_match('/^\d{11}$/', $cpf)) {
      $cpf = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
  }

  $cep = $step2['cep'] ?? '';
  if (is_string($cep) && preg_match('/^\d{8}$/', $cep)) {
      $cep = preg_replace('/(\d{5})(\d{3})/', '$1-$2', $cep);
  }

  if (is_string($cep) && preg_match('/^\d{5}-\d{3}$/', $cep)) {
      $cep = $cep;
  }

  $estadoCivil = $step2['estado_civil'] ?? '-';

  $estadoCivilLabel = match ($estadoCivil) {
      'SOLTEIRO' => 'Solteiro(a)',
      'CASADO' => 'Casado(a)',
      'DIVORCIADO' => 'Divorciado(a)',
      'VIUVO' => 'Viúvo(a)',
      'UNIAO_ESTAVEL' => 'União estável',
      default => $estadoCivil ?: '-',
  };
@endphp

<body>
  <div class="wrap">
    <main class="card">
      <header class="banner">
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Banner do MCC">
      </header>

      <section class="content">
        <h2 class="title">Revisão da Inscrição para a Assembleia Diocesana {{ $numero }}</h2>
        <p class="subtitle">Confira todos os dados antes de enviar</p>

        <div class="section">
          <div class="section-head">Dados pessoais</div>
          <div class="section-body">
            <div class="row">
              <div class="k">Nome</div>
              <div class="v">{{ $step2['nome'] ?? '-' }}</div>
            </div>

            <div class="row">
              <div class="k">Data de nascimento</div>
              <div class="v">{{ $step2['data_nascimento'] ?? '-' }}</div>
            </div>

            <div class="row">
              <div class="k">E-mail</div>
              <div class="v">{{ $step2['email'] ?? '-' }}</div>
            </div>

            <div class="row">
              <div class="k">Estado civil</div>
              <div class="v">{{ $estadoCivilLabel }}</div>
            </div>

            <div class="row">
              <div class="k">CPF</div>
              <div class="v">{{ $cpf ?: '-' }}</div>
            </div>

            <div class="row">
              <div class="k">Paróquia</div>
              <div class="v">{{ $step2['paroquia'] ?? '-' }}</div>
            </div>
          </div>
        </div>

        <div class="section">
          <div class="section-head">Endereço</div>
          <div class="section-body">
            <div class="row">
              <div class="k">CEP</div>
              <div class="v">{{ $cep ?: '-' }}</div>
            </div>

            <div class="row">
              <div class="k">Endereço</div>
              <div class="v">{{ $step2['endereco'] ?? '-' }}</div>
            </div>

            <div class="row">
              <div class="k">Bairro</div>
              <div class="v">{{ $step2['bairro'] ?? '-' }}</div>
            </div>

            <div class="row">
              <div class="k">Cidade</div>
              <div class="v">{{ $step2['cidade'] ?? '-' }}</div>
            </div>

            <div class="row">
              <div class="k">Estado (UF)</div>
              <div class="v">{{ $step2['estado'] ?? '-' }}</div>
            </div>
          </div>
        </div>

        <div class="section">
          <div class="section-head">Pagamento / PIX</div>
          <div class="section-body">
            <div class="pix-box">
              <div class="pix-info">
                <p class="pix-line">
                  <strong>Taxa:</strong>
                  R$ {{ number_format((float) ($evento->valor_contribuicao ?? 0), 2, ',', '.') }}
                </p>

                <p class="pix-line">
                  <strong>Chave PIX:</strong> {{ $evento->pix_chave ?? '-' }}
                  @if(!empty($evento->pix_banco))
                    — {{ $evento->pix_banco }}
                  @endif
                  <br>
                  <strong>Favorecido:</strong> {{ $evento->pix_favorecido ?? '-' }}
                </p>

                <p class="pix-line">
                  <strong>Evento:</strong> {{ $evento->nome ?? ('Assembleia Diocesana ' . $numero) }}<br>
                  <strong>Dias:</strong> {{ $evento->dias ?? '-' }}
                </p>

                <p class="pix-line">
                  <strong>Comprovante:</strong>
                  enviar para o WhatsApp <strong>{{ $evento->comprovante_whatsapp ?? '-' }}</strong>
                  @if(!empty($evento->comprovante_responsavel))
                    — A/c {{ $evento->comprovante_responsavel }}
                  @endif
                </p>

                <p class="pix-note">
                  Escaneie o QR Code para pagar via PIX.
                </p>
              </div>

              <div class="pix-qr-wrap">
                <div class="pix-qr">
                  <img
                    src="{{ asset($evento->pix_qr_code_path ?? 'assets/img/pix.png') }}"
                    alt="QR Code PIX"
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="actions">
          <a class="btn-link" href="{{ route('assembleia.passo.2', ['numero' => $numero]) }}">
            Voltar
          </a>

          <form method="POST" action="{{ route('assembleia.finalizar', ['numero' => $numero]) }}">
            @csrf
            <button class="btn btn-primary" type="submit">
              Confirmo que está tudo correto
            </button>
          </form>
        </div>
      </section>

      <footer class="footer">
        Revisão • Assembleia Diocesana / {{ $numero }}
      </footer>
    </main>
  </div>
</body>
</html>