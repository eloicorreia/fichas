<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inscrição — Passo 3</title>

  <style>
    :root{
      --bg:#f4f6fb; --card:#fff; --text:#111827; --muted:#4b5563; --border:#e5e7eb;
      --shadow:0 10px 30px rgba(17,24,39,.10); --radius:14px;
      --primary:#2563eb; --primary-hover:#1d4ed8;
      --danger:#991b1b; --danger-bg:#fef2f2;
    }
    *{box-sizing:border-box;}
    body{
      margin:0;
      font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,Arial,"Noto Sans","Liberation Sans",sans-serif;
      color:var(--text);
      background:var(--bg);
      line-height:1.5;
    }
    .wrap{
      min-height:100vh;
      padding:16px;
      display:flex;
      justify-content:center;
      align-items:flex-start;
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

    .badge strong{
      font-weight: 700;
    }
    .form{
      margin-top:16px;
      border:1px solid var(--border);
      border-radius:12px;
      padding:14px;
      background:#fff;
    }

    .field{
      display:block;
    }
    .field.autocomplete-wrap{
      position:relative;
    }
    .label{
      display:block;
      font-size:13px;
      letter-spacing:.4px;
      font-weight:700;
      margin-bottom:8px;
    }
    .req{
      color:#b91c1c;
      margin-left:4px;
    }
    .input, .select{
      width:100%;
      border:1px solid var(--border);
      border-radius:10px;
      padding:12px 14px;
      font-size:15px;
      outline:none;
      background:#fff;
    }
    .input:focus, .select:focus{
      border-color:#93c5fd;
      box-shadow:0 0 0 4px rgba(147,197,253,.25);
    }
    .hint{
      margin-top:6px;
      color:var(--muted);
      font-size:12px;
    }
    .error-box{
      margin-top:8px;
      border:1px solid #fecaca;
      background:var(--danger-bg);
      color:var(--danger);
      padding:8px 10px;
      border-radius:10px;
      font-size:13px;
    }
    .autocomplete-list{
      position:absolute;
      top:100%;
      left:0;
      right:0;
      z-index:20;
      margin-top:6px;
      background:#fff;
      border:1px solid var(--border);
      border-radius:10px;
      box-shadow:var(--shadow);
      max-height:220px;
      overflow-y:auto;
      display:none;
    }
    .autocomplete-item{
      padding:10px 12px;
      cursor:pointer;
      font-size:14px;
      border-bottom:1px solid #f3f4f6;
    }
    .autocomplete-item:last-child{
      border-bottom:0;
    }
    .autocomplete-item:hover{
      background:#eff6ff;
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
    .btn-primary{ background:var(--primary); color:#fff; }
    .btn-primary:hover{ background:var(--primary-hover); }
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
          <span>Passo 3 de 6 • Sobre o casamento</span>
        </div>

        <form class="form" method="POST" action="{{ url('cursilho/'.$sexo.'/'.$numero.'/passo/3') }}" novalidate>
          @csrf

          <div class="field">
            <label class="label" for="data_casamento">Data do Casamento (DD/MM/AAAA)<span class="req">*</span></label>
            <input
              class="input"
              id="data_casamento"
              name="data_casamento"
              type="text"
              inputmode="numeric"
              autofocus
              placeholder="DD/MM/AAAA"
              value="{{ old('data_casamento', $wizard['data']['step3']['data_casamento'] ?? '') }}"
              required
            >
            <div class="hint">Exemplo: 27/10/2010</div>
            @error('data_casamento') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field autocomplete-wrap">
            <label class="label" for="cidade_casou">Cidade que casou<span class="req">*</span></label>
            <input
              class="input"
              id="cidade_casou"
              name="cidade_casou"
              type="text"
              placeholder="Digite a cidade..."
              autocomplete="off"
              value="{{ old('cidade_casou', $wizard['data']['step3']['cidade_casou'] ?? '') }}"
              required
            >
            <div class="hint">Selecione um município no formato Cidade/UF.</div>
            <div id="cidade_casou_sugestoes" class="autocomplete-list"></div>
            @error('cidade_casou') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="igreja_casou">Igreja em que casou<span class="req">*</span></label>
            <input
              class="input"
              id="igreja_casou"
              name="igreja_casou"
              type="text"
              placeholder="Sua resposta"
              style="text-transform:uppercase;"
              value="{{ old('igreja_casou', $wizard['data']['step3']['igreja_casou'] ?? '') }}"
              required
            >
            @error('igreja_casou') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="actions">
            <a class="btn-link" href="{{ url('cursilho/'.$sexo.'/'.$numero.'/passo/2') }}">Voltar</a>
            <button class="btn btn-primary" type="submit">Prosseguir</button>
          </div>
        </form>
      </section>

      <footer class="footer">
        Página pública de inscrição • {{ strtoupper($sexoLabel) }} / {{ $numero }}
      </footer>
    </main>
  </div>

  <script>
    (function () {
      function onlyDigits(v){ return (v || '').replace(/\D+/g, ''); }

      function formatDateBr(digits){
        digits = onlyDigits(digits).slice(0, 8);
        if (digits.length <= 2) return digits;
        if (digits.length <= 4) return digits.slice(0,2) + '/' + digits.slice(2);
        return digits.slice(0,2) + '/' + digits.slice(2,4) + '/' + digits.slice(4);
      }

      const dc = document.getElementById('data_casamento');
      if (dc) {
        dc.addEventListener('input', function () {
          dc.value = formatDateBr(dc.value);
        });
        dc.value = formatDateBr(dc.value);
      }

      const inputIgreja = document.getElementById('igreja_casou');
      if (inputIgreja) {
        inputIgreja.addEventListener('input', function () {
          inputIgreja.value = (inputIgreja.value || '').toUpperCase();
        });
        inputIgreja.value = (inputIgreja.value || '').toUpperCase();
      }

      const inputCidade = document.getElementById('cidade_casou');
      const boxSugestoes = document.getElementById('cidade_casou_sugestoes');
      let timeoutBusca = null;

      function esconderSugestoes() {
        boxSugestoes.innerHTML = '';
        boxSugestoes.style.display = 'none';
      }

      function renderSugestoes(items) {
        if (!items || !items.length) {
          esconderSugestoes();
          return;
        }

        boxSugestoes.innerHTML = '';

        items.forEach(function (item) {
          const div = document.createElement('div');
          div.className = 'autocomplete-item';
          div.textContent = item.label;
          div.addEventListener('click', function () {
            inputCidade.value = item.label;
            esconderSugestoes();
          });
          boxSugestoes.appendChild(div);
        });

        boxSugestoes.style.display = 'block';
      }

      async function buscarMunicipios(termo) {
        const url = '{{ route('municipios.autocomplete') }}?q=' + encodeURIComponent(termo);

        try {
          const response = await fetch(url, {
            method: 'GET',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Accept': 'application/json'
            }
          });

          if (!response.ok) {
            esconderSugestoes();
            return;
          }

          const json = await response.json();
          renderSugestoes(json.data || []);
        } catch (e) {
          esconderSugestoes();
        }
      }

      if (inputCidade) {
        inputCidade.addEventListener('input', function () {
          const termo = (inputCidade.value || '').trim();

          clearTimeout(timeoutBusca);

          if (termo.length < 2) {
            esconderSugestoes();
            return;
          }

          timeoutBusca = setTimeout(function () {
            buscarMunicipios(termo);
          }, 250);
        });

        document.addEventListener('click', function (event) {
          if (!boxSugestoes.contains(event.target) && event.target !== inputCidade) {
            esconderSugestoes();
          }
        });
      }
    })();
  </script>
</body>
</html>