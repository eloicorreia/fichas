<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Assembleia Diocesana — {{ $numero }}</title>

  <style>
    :root{
      --bg: #f4f6fb;
      --card: #ffffff;
      --text: #111827;
      --muted: #4b5563;
      --border: #e5e7eb;
      --shadow: 0 10px 30px rgba(17,24,39,.10);
      --radius: 14px;

      --primary: #2563eb;
      --primary-hover: #1d4ed8;
      --disabled: #9ca3af;

      --danger: #dc2626;
      --danger-bg: #fef2f2;
    }

    * { box-sizing: border-box; }
    body{
      margin: 0;
      font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Arial, "Noto Sans", "Liberation Sans", sans-serif;
      color: var(--text);
      background: var(--bg);
      line-height: 1.55;
    }

    .wrap{
      min-height: 100vh;
      padding: 16px;
      display: flex;
      align-items: flex-start;
      justify-content: center;
    }

    .card{
      width: 100%;
      max-width: 860px;
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .banner{
      width: 100%;
      height: 140px;
      background: #c7d2fe;
      position: relative;
    }

    .banner img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .content{
      padding: 18px 18px 22px;
    }

    .title{
      margin: 0 0 6px;
      font-size: 22px;
      letter-spacing: .2px;
    }

    .subtitle{
      margin: 0 0 14px;
      color: var(--muted);
      font-size: 14px;
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

    .badge strong{
      font-weight: 700;
    }

    .section-title{
      margin: 14px 0 8px;
      font-size: 15px;
      letter-spacing: .4px;
      text-transform: uppercase;
    }

    .text{
      margin: 0 0 10px;
      color: #111827;
      font-size: 15px;
    }

    .text strong{
      font-weight: 800;
    }

    .divider{
      height: 1px;
      background: var(--border);
      margin: 18px 0;
    }

    .event-box{
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 14px;
      background: #fafafa;
    }

    .event-line{
      margin: 0;
      font-size: 15px;
    }

    .event-line strong{
      font-weight: 900;
    }

    .event-image{
      margin-top: 16px;
      border: 1px solid var(--border);
      border-radius: 12px;
      overflow: hidden;
      background: #fff;
    }
    .event-image img{
      width: 100%;
      height: auto;
      display: block;
    }

    .consent{
      margin-top: 18px;
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 14px;
      background: #fff;
    }

    .check-row{
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }

    .check-row input[type="checkbox"]{
      margin-top: 2px;
      width: 18px;
      height: 18px;
    }

    .check-label{
      font-size: 15px;
    }

    .actions{
      margin-top: 12px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn{
      appearance: none;
      border: 0;
      border-radius: 10px;
      padding: 12px 16px;
      font-weight: 800;
      font-size: 15px;
      cursor: pointer;
      transition: transform .05s ease, background .15s ease, opacity .15s ease;
      user-select: none;
    }

    .btn:active{
      transform: translateY(1px);
    }

    .btn-primary{
      background: var(--primary);
      color: #fff;
    }
    .btn-primary:hover{
      background: var(--primary-hover);
    }

    .btn[disabled]{
      background: var(--disabled);
      cursor: not-allowed;
      opacity: .75;
    }

    .error-box{
      margin-top: 10px;
      border: 1px solid #fecaca;
      background: var(--danger-bg);
      color: var(--danger);
      padding: 10px 12px;
      border-radius: 10px;
      font-size: 14px;
    }

    .footer{
      padding: 14px 18px;
      border-top: 1px solid var(--border);
      color: var(--muted);
      font-size: 12px;
    }

    @media (min-width: 768px){
      .wrap{ padding: 28px; }
      .banner{ height: 180px; }
      .content{ padding: 26px 28px 30px; }
      .title{ font-size: 28px; }
      .subtitle{ font-size: 15px; }
      .text{ font-size: 16px; }
    }
  </style>
</head>

<body>
  <div class="wrap">
    <main class="card" role="main" aria-label="Ficha de inscrição">
      <header class="banner">
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Banner do MCC">
      </header>

      <section class="content">
        <h1 class="title">
          Inscrição Assembleia Diocesana para <span style="font-weight: 900;">{{ $numero }}</span>
        </h1>

        <p class="subtitle">
          GED Bauru - Grupo Executivo Diocesano - Bauru / SP
        </p>

        <div class="badge">
          <span>Passo 1 de 2 • Assembleia Diocesana {{ $numero }}</span>
        </div>

        <!-- IMAGEM DO EVENTO -->
        <div class="event-image">
          <img src="{{ asset('assets/img/assembleia-' . $numero . '.png') }}" alt="Imagem do evento {{ $numero }}">
        </div>

        <h2 class="section-title">Sua privacidade é importante para nós.</h2>

        <p class="text">
          As informações solicitadas neste formulário serão utilizadas <strong>somente para a organização do evento</strong>,
          como controle de inscrições, comunicação com os participantes e demais ações necessárias para sua realização.
        </p>

        <p class="text">
          Seus dados <strong>não serão publicados nem compartilhados indevidamente</strong>, sendo tratados com cuidado, sigilo e responsabilidade,
          em conformidade com a <strong>Lei Geral de Proteção de Dados Pessoais (LGPD)</strong>.
        </p>

        <p class="text">
          Nosso compromisso é garantir que você se sinta seguro(a) ao realizar seu cadastro, sabendo que suas informações serão usadas
          <strong>apenas para a finalidade deste evento</strong>.
        </p>

        <div class="divider"></div>

        <div class="event-box">
          <p class="event-line"><strong>EVENTO:</strong> Assembleia Diocesana {{ $numero }}</p>
          <p class="event-line" style="margin-top: 8px;">
            <strong>DIAS:</strong> {{ $evento->dias }}
          </p>
        </div>

        <!-- FORM (checkbox obrigatório) -->
        <form method="POST" action="{{ route('assembleia.passo.1.store', ['numero' => $numero]) }}">
          @csrf

          <div class="consent">
            <div class="check-row">
              <input
                id="agree"
                type="checkbox"
                name="agree"
                value="1"
                {{ old('agree', $wizard['data']['step1']['agree'] ?? false) ? 'checked' : '' }}
              >
              <label class="check-label" for="agree">
                Eu concordo e vou prosseguir
              </label>
            </div>

            @error('agree')
              <div class="error-box">{{ $message }}</div>
            @enderror

            <div class="actions">
              <button id="btnProceed" class="btn btn-primary" type="submit" disabled>
                Prosseguir
              </button>
            </div>
          </div>
        </form>

      </section>

      <footer class="footer">
        Página pública de inscrição • Assembleia Diocesana {{ $numero }}
      </footer>
    </main>
  </div>

  <script>
    (function () {
      const agree = document.getElementById('agree');
      const btn = document.getElementById('btnProceed');

      function sync() {
        btn.disabled = !agree.checked;
      }

      agree.addEventListener('change', sync);
      sync();
    })();
  </script>
</body>
</html>