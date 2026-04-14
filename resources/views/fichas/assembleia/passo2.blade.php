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

      --danger: #dc2626;
      --danger-bg: #fef2f2;
    }

    *{ box-sizing:border-box; }
    body{
      margin:0;
      font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Arial, "Noto Sans", "Liberation Sans", sans-serif;
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

    .banner{ width:100%; height:140px; background:#c7d2fe; }
    .banner img{ width:100%; height:100%; object-fit:cover; display:block; }

    .content{ padding:18px 18px 22px; }

    .title{ margin:0 0 6px; font-size:22px; letter-spacing:.2px; }
    .subtitle{ margin:0 0 14px; color:var(--muted); font-size:14px; }

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
      font-weight:700;
    }

    .event-image{
      margin-top:16px;
      border:1px solid var(--border);
      border-radius:12px;
      overflow:hidden;
      background:#fff;
    }

    .event-image img{
      width:100%;
      height:auto;
      display:block;
    }

    .form{
      margin-top:16px;
      border:1px solid var(--border);
      border-radius:12px;
      padding:14px;
      background:#fff;
    }

    .field{ margin-top:14px; }

    .label{
      display:block;
      font-size:13px;
      letter-spacing:.4px;
      font-weight:700;
      margin-bottom:8px;
    }

    .req{ color:var(--danger); font-weight:900; margin-left:4px; }

    .input,
    .select{
      width:100%;
      border:0;
      border-bottom:1px solid var(--border);
      padding:10px 2px;
      font-size:16px;
      outline:none;
      background:transparent;
    }

    .input:focus,
    .select:focus{
      border-bottom-color:var(--primary);
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

    .footer{
      padding:14px 18px;
      border-top:1px solid var(--border);
      color:var(--muted);
      font-size:12px;
    }

    .cep-loading{
      display:none;
      margin-top:8px;
      color:var(--muted);
      font-size:13px;
      align-items:center;
      gap:8px;
    }

    .cep-loading.show{
      display:flex;
    }

    .spinner{
      width:16px;
      height:16px;
      border:2px solid #d1d5db;
      border-top-color:var(--primary);
      border-radius:50%;
      animation:spin .8s linear infinite;
    }

    @keyframes spin{
      to{ transform:rotate(360deg); }
    }

    @media (min-width:768px){
      .wrap{ padding:28px; }
      .banner{ height:180px; }
      .content{ padding:26px 28px 30px; }
      .title{ font-size:28px; }
      .subtitle{ font-size:15px; }
    }

    .input.uppercase{
      text-transform:uppercase;
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
          Inscrição Assembleia Diocesana <span style="font-weight: 900;">{{ $numero }}</span>
        </h1>
        <p class="subtitle">GED Bauru - Grupo Executivo Diocesano - Bauru / SP</p>

        <div class="badge">
          <span>Passo 2 de 2 • Dados pessoais e endereço</span>
        </div>

        <form class="form" method="POST" action="{{ route('assembleia.passo.2.store', ['numero' => $numero]) }}" novalidate>
          @csrf

          <div class="field">
            <label class="label" for="nome">Nome<span class="req">*</span></label>
            <input
              class="input uppercase"
              id="nome"
              name="nome"
              type="text"
              autocomplete="name"
              placeholder="Sua resposta"
              autofocus
              value="{{ old('nome', $dados['nome'] ?? '') }}"
              required
            >
            @error('nome') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="data_nascimento">Data de nascimento (DD/MM/AAAA)<span class="req">*</span></label>
            <input
              class="input"
              id="data_nascimento"
              name="data_nascimento"
              type="text"
              inputmode="numeric"
              placeholder="DD/MM/AAAA"
              value="{{ old('data_nascimento', $dados['data_nascimento'] ?? '') }}"
              required
            >
            <div class="hint">Exemplo: 27/10/1990</div>
            @error('data_nascimento') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="email">E-mail</label>
            <input 
              class="input" 
              id="email" 
              name="email" 
              type="email"
              autocomplete="email"
              placeholder="Seu e-mail"
              value="{{ old('email', $dados['email'] ?? '') }}">
            @error('email') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="estado_civil">Estado civil<span class="req">*</span></label>
            @php
              $estadoAtual = old('estado_civil', $dados['estado_civil'] ?? '');
            @endphp
            <select class="select" id="estado_civil" name="estado_civil" required>
              <option value="" disabled {{ $estadoAtual === '' ? 'selected' : '' }}>Escolher</option>
              <option value="SOLTEIRO" {{ $estadoAtual === 'SOLTEIRO' ? 'selected' : '' }}>Solteiro(a)</option>
              <option value="CASADO" {{ $estadoAtual === 'CASADO' ? 'selected' : '' }}>Casado(a)</option>
              <option value="DIVORCIADO" {{ $estadoAtual === 'DIVORCIADO' ? 'selected' : '' }}>Divorciado(a)</option>
              <option value="VIUVO" {{ $estadoAtual === 'VIUVO' ? 'selected' : '' }}>Viúvo(a)</option>
              <option value="UNIAO_ESTAVEL" {{ $estadoAtual === 'UNIAO_ESTAVEL' ? 'selected' : '' }}>União estável</option>
            </select>
            @error('estado_civil') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="cpf">CPF<span class="req">*</span></label>
            <input
              class="input"
              id="cpf"
              name="cpf"
              type="text"
              inputmode="numeric"
              placeholder="000.000.000-00"
              value="{{ old('cpf', isset($dados['cpf']) ? (strlen($dados['cpf']) === 11 ? preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $dados['cpf']) : $dados['cpf']) : '') }}"
              required
            >
            <div class="hint">Digite apenas números — a máscara será aplicada automaticamente.</div>
            @error('cpf') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="cep">CEP<span class="req">*</span></label>
            <input
              class="input"
              id="cep"
              name="cep"
              type="text"
              inputmode="numeric"
              placeholder="00000-000"
              value="{{ old('cep', $dados['cep'] ?? '') }}"
              required
            >
            <div id="cep-loading" class="cep-loading">
              <span class="spinner"></span>
              <span>Pesquisando CEP...</span>
            </div>
            @error('cep') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="endereco">Endereço<span class="req">*</span></label>
            <input
              class="input uppercase"
              id="endereco"
              name="endereco"
              type="text"
              placeholder="Sua resposta"
              value="{{ old('endereco', $dados['endereco'] ?? '') }}"
              required
            >
            @error('endereco') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="bairro">Bairro<span class="req">*</span></label>
            <input
              class="input uppercase"
              id="bairro"
              name="bairro"
              type="text"
              placeholder="Sua resposta"
              value="{{ old('bairro', $dados['bairro'] ?? '') }}"
              required
            >
            @error('bairro') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="cidade">Cidade<span class="req">*</span></label>
            <input
              class="input uppercase"
              id="cidade"
              name="cidade"
              type="text"
              placeholder="Sua resposta"
              value="{{ old('cidade', $dados['cidade'] ?? '') }}"
              required
            >
            @error('cidade') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          @php
            $ufAtual = old('estado', $dados['estado'] ?? '');
            $ufs = ['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];
          @endphp
          <div class="field">
            <label class="label" for="estado">Estado<span class="req">*</span></label>
            <select class="select" id="estado" name="estado" required>
              <option value="" disabled {{ $ufAtual === '' ? 'selected' : '' }}>Escolher</option>
              @foreach($ufs as $uf)
                <option value="{{ $uf }}" {{ $ufAtual === $uf ? 'selected' : '' }}>{{ $uf }}</option>
              @endforeach
            </select>
            @error('estado') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="paroquia">Qual paróquia?<span class="req">*</span></label>
            <input
              class="input uppercase"
              id="paroquia"
              name="paroquia"
              type="text"
              placeholder="Sua resposta"
              value="{{ old('paroquia', $dados['paroquia'] ?? '') }}"
              required
            >
            @error('paroquia') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="actions">
            <a class="btn-link" href="{{ url('fichas/assembleia/'.$numero) }}">Voltar</a>
            <button class="btn btn-primary" type="submit">Prosseguir</button>
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
      function onlyDigits(v) {
        return (v || '').replace(/\D+/g, '');
      }

      function formatCpf(digits) {
        digits = onlyDigits(digits).slice(0, 11);

        let out = digits;

        if (digits.length > 3) out = digits.slice(0, 3) + '.' + digits.slice(3);
        if (digits.length > 6) out = out.slice(0, 7) + '.' + out.slice(7);
        if (digits.length > 9) out = out.slice(0, 11) + '-' + out.slice(11);

        return out;
      }

      function formatDateBr(digits) {
        digits = onlyDigits(digits).slice(0, 8);

        if (digits.length <= 2) return digits;
        if (digits.length <= 4) return digits.slice(0, 2) + '/' + digits.slice(2);

        return digits.slice(0, 2) + '/' + digits.slice(2, 4) + '/' + digits.slice(4);
      }

      function formatCep(v) {
        const d = onlyDigits(v).slice(0, 8);

        if (d.length <= 5) return d;

        return d.slice(0, 5) + '-' + d.slice(5);
      }

      function forceUppercaseInput(input) {
        if (!input) return;

        input.addEventListener('input', function () {
          input.value = (input.value || '').toUpperCase();
        });

        input.value = (input.value || '').toUpperCase();
      }

      function setCursorToEnd(input) {
        if (!input) return;

        const len = input.value.length;
        input.focus();

        if (typeof input.setSelectionRange === 'function') {
          input.setSelectionRange(len, len);
        }
      }

      const cpf = document.getElementById('cpf');
      const dn = document.getElementById('data_nascimento');
      const nome = document.getElementById('nome');
      const cep = document.getElementById('cep');
      const endereco = document.getElementById('endereco');
      const bairro = document.getElementById('bairro');
      const cidade = document.getElementById('cidade');
      const estado = document.getElementById('estado');
      const cepLoading = document.getElementById('cep-loading');

      let ultimoCepPesquisado = '';

      if (cpf) {
        cpf.addEventListener('input', function () {
          cpf.value = formatCpf(cpf.value);
        });

        cpf.value = formatCpf(cpf.value);
      }

      if (dn) {
        dn.addEventListener('input', function () {
          dn.value = formatDateBr(dn.value);
        });

        dn.value = formatDateBr(dn.value);
      }

      forceUppercaseInput(nome);
      forceUppercaseInput(endereco);
      forceUppercaseInput(bairro);
      forceUppercaseInput(cidade);

      if (cep) {
        cep.addEventListener('input', function () {
          cep.value = formatCep(cep.value);

          const cepDigits = onlyDigits(cep.value);

          if (cepDigits.length === 8 && cepDigits !== ultimoCepPesquisado) {
            buscarCep(cepDigits);
          }
        });

        cep.addEventListener('blur', function () {
          const cepDigits = onlyDigits(cep.value);

          if (cepDigits.length === 8 && cepDigits !== ultimoCepPesquisado) {
            buscarCep(cepDigits);
          }
        });

        cep.value = formatCep(cep.value);
      }

      async function buscarCep(cepDigits) {
        ultimoCepPesquisado = cepDigits;

        if (cepLoading) {
          cepLoading.classList.add('show');
        }

        function aplicarEndereco(data) {
          if (bairro && data.bairro) {
            bairro.value = String(data.bairro).toUpperCase();
          }

          if (cidade && data.cidade) {
            cidade.value = String(data.cidade).toUpperCase();
          }

          if (estado && data.estado) {
            estado.value = String(data.estado).toUpperCase();
          }

          if (endereco && data.endereco) {
            let rua = String(data.endereco).toUpperCase().trim();

            if (rua !== '' && !rua.endsWith(',')) {
              rua = rua + ', ';
            }

            endereco.value = rua;
            setCursorToEnd(endereco);
          }
        }

        function fetchBrasilApi() {
          return fetch('https://brasilapi.com.br/api/cep/v1/' + cepDigits, {
            method: 'GET',
            headers: {
              'Accept': 'application/json'
            }
          }).then(async function (response) {
            if (!response.ok) {
              throw new Error('BrasilAPI indisponível');
            }

            const json = await response.json();

            return {
              bairro: json.neighborhood || '',
              cidade: json.city || '',
              estado: json.state || '',
              endereco: json.street || ''
            };
          });
        }

        function fetchViaCep() {
          return fetch('https://viacep.com.br/ws/' + cepDigits + '/json/', {
            method: 'GET',
            headers: {
              'Accept': 'application/json'
            }
          }).then(async function (response) {
            if (!response.ok) {
              throw new Error('ViaCEP indisponível');
            }

            const json = await response.json();

            if (json.erro) {
              throw new Error('CEP não encontrado no ViaCEP');
            }

            return {
              bairro: json.bairro || '',
              cidade: json.localidade || '',
              estado: json.uf || '',
              endereco: json.logradouro || ''
            };
          });
        }

        try {
          const resultado = await Promise.any([
            fetchBrasilApi(),
            fetchViaCep()
          ]);

          aplicarEndereco(resultado);
        } catch (e) {
          console.error('Erro ao consultar CEP nos provedores:', e);
        } finally {
          if (cepLoading) {
            cepLoading.classList.remove('show');
          }
        }
      }
    })();
  </script>
</body>
</html>