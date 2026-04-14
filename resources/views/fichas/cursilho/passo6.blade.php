<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inscrição Cursilho — {{ strtoupper($sexoLabel) }} — {{ $numero }}º</title>

  <style>
    :root{
      --bg:#f4f6fb; --card:#fff; --text:#111827; --muted:#4b5563; --border:#e5e7eb;
      --shadow:0 10px 30px rgba(17,24,39,.10); --radius:14px;
      --primary:#2563eb; --primary-hover:#1d4ed8;
      --danger:#dc2626; --danger-bg:#fef2f2;
    }
    *{box-sizing:border-box;}
    body{margin:0;font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,Arial,"Noto Sans","Liberation Sans",sans-serif;color:var(--text);background:var(--bg);line-height:1.55;}
    .wrap{min-height:100vh;padding:16px;display:flex;align-items:flex-start;justify-content:center;}
    .card{width:100%;max-width:860px;background:var(--card);border:1px solid var(--border);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);}
    .banner{width:100%;height:140px;background:#c7d2fe;}
    .banner img{width:100%;height:100%;object-fit:cover;display:block;}
    .content{padding:18px 18px 22px;}
    .title{margin:0 0 6px;font-size:22px;letter-spacing:.2px;}
    .subtitle{margin:0 0 14px;color:var(--muted);font-size:14px;}
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
    .form{margin-top:16px;border:1px solid var(--border);border-radius:12px;padding:14px;background:#fff;}
    .section{margin-top:4px;border:1px solid var(--border);border-radius:12px;overflow:hidden;background:#fff;}
    .section-head{background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;}
    .section-body{padding:12px;}
    .field{margin-top:14px;}
    .label{
      display:block;
      font-size:13px;
      letter-spacing:.4px;
      font-weight:700;
      margin-bottom:8px;
    }
    .req{color:var(--danger);font-weight:900;margin-left:4px;}
    .textarea{
      width:100%;
      border:0;
      border-bottom:1px solid var(--border);
      padding:10px 2px;
      font-size:16px;
      outline:none;
      background:transparent;
      resize:vertical;
      min-height:88px;
    }
    .textarea:focus{border-bottom-color:var(--primary);}
    .hint{margin-top:6px;color:var(--muted);font-size:12px;}
    .error-box{margin-top:8px;border:1px solid #fecaca;background:var(--danger-bg);color:var(--danger);padding:8px 10px;border-radius:10px;font-size:13px;}
    .actions{margin-top:16px;display:flex;gap:10px;flex-wrap:wrap;}
    .btn{appearance:none;border:0;border-radius:10px;padding:12px 16px;font-weight:800;font-size:15px;cursor:pointer;user-select:none;}
    .btn-primary{background:var(--primary);color:#fff;}
    .btn-primary:hover{background:var(--primary-hover);}
    .btn-link{background:transparent;border:1px solid var(--border);color:var(--text);text-decoration:none;display:inline-flex;align-items:center;justify-content:center;padding:12px 16px;border-radius:10px;font-weight:800;font-size:15px;}
    .footer{padding:14px 18px;border-top:1px solid var(--border);color:var(--muted);font-size:12px;}
    .input.uppercase { text-transform: uppercase; }
    @media (min-width:768px){.wrap{padding:28px;}.banner{height:180px;}.content{padding:26px 28px 30px;}.title{font-size:28px;}.subtitle{font-size:15px;}}
    
  </style>
</head>

<body>
  <div class="wrap">
    <main class="card">
      <header class="banner">
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Banner do MCC">
      </header>

      <section class="content">
        <h1 class="title">
          Inscrição Cursilho para <span style="font-weight:900;">{{ strtoupper($sexoLabel) }}</span>
        </h1>
        <p class="subtitle">GED Bauru - Grupo Executivo Diocesano - Bauru / SP</p>

        <div class="badge">
          <span>Passo 6 de 6 • Informações finais</span>
        </div>

        <form class="form" method="POST" action="{{ url('cursilho/'.$sexo.'/'.$numero.'/passo/6') }}" novalidate>
          @csrf

          <div class="field" style="margin-top:0;">
            <label class="label" for="contato_familia_missa">
              Contato da família para a missa de encerramento (Nome e fone para contato)
              <span class="req">*</span>
            </label>
            <textarea
              class="textarea"
              id="contato_familia_missa"
              name="contato_familia_missa"
              placeholder="Informe o nome e telefone de um contato da família para a missa de encerramento do cursilho. Exemplo: Maria Silva - (14) 99999-9999"
              required
            >{{ old('contato_familia_missa', $wizard['data']['step6']['contato_familia_missa'] ?? '') }}</textarea>
            @error('contato_familia_missa') <div class="error-box">{{ $message }}</div> @enderror
          </div>


          <div class="field">
            <label class="label" for="alimentacao_especial">
              Para as refeições que serão servidas no cursilho: necessita de alguma alimentação especial?
              Descreva abaixo sua restrição
              <span class="req">*</span>
            </label>
            <textarea
              class="textarea"
              id="alimentacao_especial"
              name="alimentacao_especial"
              placeholder="Informe sua restrição alimentar ou escreva 'NENHUMA' caso não tenha nenhuma restrição. Exemplo: Não consumo glúten."
              required
            >{{ old('alimentacao_especial', $wizard['data']['step6']['alimentacao_especial'] ?? '') }}</textarea>
            @error('alimentacao_especial') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="padrinho_madrinha_contato">
              Dados do seu padrinho ou madrinha de cursilho que lhe convidou (Nome e fone para contato)
              <span class="req">*</span>
            </label>
            <textarea
              class="textarea"
              id="padrinho_madrinha_contato"
              name="padrinho_madrinha_contato"
              placeholder="Informe o nome e telefone do seu padrinho ou madrinha de cursilho que lhe convidou. Exemplo: João da Silva - (14) 99999-9999"
              required
            >{{ old('padrinho_madrinha_contato', $wizard['data']['step6']['padrinho_madrinha_contato'] ?? '') }}</textarea>
            @error('padrinho_madrinha_contato') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="actions">
            <a class="btn-link" href="{{ url('cursilho/'.$sexo.'/'.$numero.'/passo/5') }}">Voltar</a>
            <button class="btn btn-primary" type="submit">Prosseguir</button>
          </div>
        </form>
      </section>

      <footer class="footer">
        Página pública de inscrição • {{ strtoupper($sexoLabel) }} / {{ $numero }}
      </footer>
    </main>
  </div>
</body>
</html>