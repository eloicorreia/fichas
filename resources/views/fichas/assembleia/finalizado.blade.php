<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inscrição concluída — Assembleia Diocesana {{ $numero }}</title>

  <style>
    :root{
      --bg:#f4f6fb; --card:#fff; --text:#111827; --muted:#4b5563; --border:#e5e7eb;
      --shadow:0 10px 30px rgba(17,24,39,.10); --radius:14px;
      --primary:#2563eb; --primary-hover:#1d4ed8;
    }
    *{box-sizing:border-box;}
    body{
      margin:0;
      font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,Arial,"Noto Sans","Liberation Sans",sans-serif;
      color:var(--text);
      background:var(--bg);
      line-height:1.65;
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
      display:inline-flex;
      gap:8px;
      align-items:center;
      padding:8px 10px;
      border-radius:999px;
      background:#f3f4f6;
      border:1px solid var(--border);
      font-size:13px;
      margin:10px 0 16px;
      width:fit-content;
      max-width:100%;
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
    .p{
      margin:0 0 12px;
      font-size:15px;
    }
    .p:last-child{
      margin-bottom:0;
    }
    .actions{
      margin-top:18px;
      display:flex;
      flex-wrap:wrap;
      gap:10px;
    }
    .btn{
      appearance:none;
      border:0;
      border-radius:10px;
      padding:12px 16px;
      font-weight:800;
      font-size:15px;
      cursor:pointer;
      transition:transform .05s ease, background .15s ease, opacity .15s ease;
      user-select:none;
      text-decoration:none;
      display:inline-flex;
      align-items:center;
      justify-content:center;
    }
    .btn:active{
      transform:translateY(1px);
    }
    .btn-primary{
      background:var(--primary);
      color:#fff;
    }
    .btn-primary:hover{
      background:var(--primary-hover);
    }
    .footer{
      padding:14px 18px;
      border-top:1px solid var(--border);
      color:var(--muted);
      font-size:12px;
    }
    @media (min-width:768px){
      .wrap{padding:28px;}
      .banner{height:180px;}
      .content{padding:26px 28px 30px;}
      .title{font-size:28px;}
      .subtitle{font-size:15px;}
      .p{font-size:16px;}
    }
  </style>
</head>

<body>
  <div class="wrap">
    <main class="card">
      <header class="banner">
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Banner do MCC">
      </header>

      <section class="content">
        <h1 class="title">Inscrição concluída ✅</h1>
        <p class="subtitle">
          Assembleia Diocesana {{ $numero }} — GED Bauru - Grupo Executivo Diocesano - Bauru / SP
        </p>

        <div class="section">
          <div class="section-head">Mensagem de acolhida</div>
          <div class="section-body">
            <p class="p"><strong>Querido irmão, querida irmã,</strong></p>

            <p class="p">
              Recebemos com alegria a sua inscrição para a <strong>Assembleia Diocesana {{ $numero }}</strong>.
              Sua presença é muito importante e representa mais do que uma participação em um evento:
              ela manifesta comunhão, compromisso e amor pela caminhada do <strong>GED Bauru</strong>
              e por toda a missão do <strong>Movimento de Cursilho</strong>.
            </p>

            <p class="p">
              A Assembleia é um momento especial de encontro, escuta, partilha e discernimento.
              É uma oportunidade preciosa para fortalecer nossa unidade, renovar nosso ardor missionário
              e recordar que cada pessoa tem um papel valioso na construção desta obra que Deus nos confiou.
            </p>

            <p class="p">
              Para o <strong>GED Bauru</strong>, este encontro tem um significado profundo, pois nos reúne
              como irmãos e irmãs que desejam caminhar juntos, servindo com humildade, disponibilidade e espírito fraterno.
              Cada presença fortalece nossa missão e ajuda a manter vivo o carisma do Cursilho em nossa Diocese.
            </p>

            <p class="p">
              Para o <strong>Cursilho</strong>, a Assembleia representa também um tempo de renovação,
              de escuta do que o Senhor quer de nós e de reafirmação do nosso compromisso de sermos presença cristã
              nos ambientes, testemunhando fé, esperança e caridade.
            </p>

            <p class="p">
              Que este momento seja vivido com coração aberto, espírito de comunhão e desejo sincero de servir.
              Que possamos, juntos, crescer na fraternidade, fortalecer nossos vínculos e continuar anunciando
              com alegria o amor de Deus a todos.
            </p>

            <p class="p">
              <strong>Obrigado por dizer “sim” a este chamado.</strong>
              Que Deus abençoe sua caminhada e que a Assembleia Diocesana seja um tempo de muitas graças,
              luz e renovação para você e para todo o nosso movimento.
            </p>

            <p class="p">
              <strong>Nos encontramos em breve, com alegria e esperança.</strong>
            </p>
          </div>
        </div>

        <div class="actions">
          <a href="{{ rtrim(config('APP_BASE'), '/') }}/" class="btn btn-primary">
            Sua inscrição foi concluída
          </a>
        </div>
      </section>

      <footer class="footer">
        Inscrição finalizada • Assembleia Diocesana {{ $numero }}
      </footer>
    </main>
  </div>
</body>
</html>