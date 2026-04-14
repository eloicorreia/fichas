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
    .field{margin-top:14px;}
    .label{
      display:block;
      font-size:13px;
      letter-spacing:.4px;
      font-weight:700;
      margin-bottom:8px;
    }
    .req{color:var(--danger);font-weight:900;margin-left:4px;}
    .input,.select{width:100%;border:0;border-bottom:1px solid var(--border);padding:10px 2px;font-size:16px;outline:none;background:transparent;}
    .input:focus,.select:focus{border-bottom-color:var(--primary);}
    .hint{margin-top:6px;color:var(--muted);font-size:12px;}
    .error-box{margin-top:8px;border:1px solid #fecaca;background:var(--danger-bg);color:var(--danger);padding:8px 10px;border-radius:10px;font-size:13px;}
    .actions{margin-top:16px;display:flex;gap:10px;flex-wrap:wrap;}
    .btn{appearance:none;border:0;border-radius:10px;padding:12px 16px;font-weight:800;font-size:15px;cursor:pointer;user-select:none;}
    .btn-primary{background:var(--primary);color:#fff;}
    .btn-primary:hover{background:var(--primary-hover);}
    .btn-link{background:transparent;border:1px solid var(--border);color:var(--text);text-decoration:none;display:inline-flex;align-items:center;justify-content:center;padding:12px 16px;border-radius:10px;font-weight:800;font-size:15px;}
    .inline-options{display:flex;gap:14px;flex-wrap:wrap;margin-top:6px;}
    .opt{display:flex;gap:8px;align-items:center;}
    .footer{padding:14px 18px;border-top:1px solid var(--border);color:var(--muted);font-size:12px;}
    .input.uppercase { text-transform: uppercase; }

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
      .wrap{padding:28px;}
      .banner{height:180px;}
      .content{padding:26px 28px 30px;}
      .title{font-size:28px;}
      .subtitle{font-size:15px;}
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
          <span>Passo 4 de 6 • Outras informações</span>
        </div>

        <form class="form" method="POST" action="{{ url('cursilho/'.$sexo.'/'.$numero.'/passo/4') }}" novalidate>
          @csrf

          <div class="field">
            <label class="label" for="nome_mae">Nome da mãe<span class="req">*</span></label>
            <input class="input uppercase" id="nome_mae" name="nome_mae" type="text"
                    placeholder="Sua resposta" autofocus
                    value="{{ old('nome_mae', $wizard['data']['step4']['nome_mae'] ?? '') }}" required>
            @error('nome_mae') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="numero_filhos">Número de filhos</label>
            <input class="input" id="numero_filhos" name="numero_filhos" type="number" min="0" max="30"
                    placeholder="Sua resposta"
                    value="{{ old('numero_filhos', $wizard['data']['step4']['numero_filhos'] ?? '') }}">
            @error('numero_filhos') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="profissao">Profissão</label>
            <input class="input uppercase" id="profissao" name="profissao" type="text"
                    placeholder="Sua resposta"
                    value="{{ old('profissao', $wizard['data']['step4']['profissao'] ?? '') }}">
            @error('profissao') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="telefone">Telefone<span class="req">*</span></label>
            <input class="input" id="telefone" name="telefone" type="text" inputmode="numeric"
                    placeholder="(00) 00000-0000"
                    value="{{ old('telefone', $wizard['data']['step4']['telefone'] ?? '') }}" required>
            @error('telefone') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="email">E-mail</label>
            <input class="input" id="email" name="email" type="email"
                    placeholder="Sua resposta"
                    value="{{ old('email', $wizard['data']['step4']['email'] ?? '') }}">
            @error('email') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          @php
            $grauAtual = old('grau_instrucao', $wizard['data']['step4']['grau_instrucao'] ?? '');
          @endphp
          <div class="field">
            <label class="label" for="grau_instrucao">Grau de instrução</label>
            <select class="select" id="grau_instrucao" name="grau_instrucao">
              <option value="" {{ $grauAtual===''?'selected':'' }}>Escolher</option>
              <option value="FUNDAMENTAL_INCOMPLETO" {{ $grauAtual==='FUNDAMENTAL_INCOMPLETO'?'selected':'' }}>Fundamental incompleto</option>
              <option value="FUNDAMENTAL_COMPLETO" {{ $grauAtual==='FUNDAMENTAL_COMPLETO'?'selected':'' }}>Fundamental completo</option>
              <option value="MEDIO_INCOMPLETO" {{ $grauAtual==='MEDIO_INCOMPLETO'?'selected':'' }}>Médio incompleto</option>
              <option value="MEDIO_COMPLETO" {{ $grauAtual==='MEDIO_COMPLETO'?'selected':'' }}>Médio completo</option>
              <option value="SUPERIOR_INCOMPLETO" {{ $grauAtual==='SUPERIOR_INCOMPLETO'?'selected':'' }}>Superior incompleto</option>
              <option value="SUPERIOR_COMPLETO" {{ $grauAtual==='SUPERIOR_COMPLETO'?'selected':'' }}>Superior completo</option>
              <option value="POS_GRADUACAO" {{ $grauAtual==='POS_GRADUACAO'?'selected':'' }}>Pós-graduação</option>
            </select>
            @error('grau_instrucao') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="cep">CEP<span class="req">*</span></label>
            <input class="input" id="cep" name="cep" type="text" inputmode="numeric"
                    placeholder="00000-000"
                    value="{{ old('cep', $wizard['data']['step4']['cep'] ?? '') }}" required>
            <div id="cep-loading" class="cep-loading">
              <span class="spinner"></span>
              <span>Pesquisando CEP...</span>
            </div>
            @error('cep') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="endereco">Endereço<span class="req">*</span></label>
            <input class="input uppercase" id="endereco" name="endereco" type="text"
                    placeholder="Sua resposta"
                    value="{{ old('endereco', $wizard['data']['step4']['endereco'] ?? '') }}" required>
            @error('endereco') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="bairro">Bairro<span class="req">*</span></label>
            <input class="input uppercase" id="bairro" name="bairro" type="text"
                    placeholder="Sua resposta"
                    value="{{ old('bairro', $wizard['data']['step4']['bairro'] ?? '') }}" required>
            @error('bairro') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          <div class="field">
            <label class="label" for="cidade">Cidade<span class="req">*</span></label>
            <input class="input uppercase" id="cidade" name="cidade" type="text"
                    placeholder="Sua resposta"
                    value="{{ old('cidade', $wizard['data']['step4']['cidade'] ?? '') }}" required>
            @error('cidade') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          @php
            $ufAtual = old('estado', $wizard['data']['step4']['estado'] ?? '');
            $ufs = ['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];
          @endphp
          <div class="field">
            <label class="label" for="estado">Estado<span class="req">*</span></label>
            <select class="select" id="estado" name="estado" required>
              <option value="" disabled {{ $ufAtual===''?'selected':'' }}>Escolher</option>
              @foreach($ufs as $uf)
                <option value="{{ $uf }}" {{ $ufAtual===$uf?'selected':'' }}>{{ $uf }}</option>
              @endforeach
            </select>
            @error('estado') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          @php
            $sacr = old('sacramentos', $wizard['data']['step4']['sacramentos'] ?? []);
            if (!is_array($sacr)) { $sacr = []; }
          @endphp
          <div class="field">
            <label class="label">Sacramentos</label>
            <div class="inline-options">
              <label class="opt">
                <input type="checkbox" name="sacramentos[]" value="BATIZADO" {{ in_array('BATIZADO', $sacr, true) ? 'checked' : '' }}>
                <span>Batizado</span>
              </label>
              <label class="opt">
                <input type="checkbox" name="sacramentos[]" value="EUCARISTIA" {{ in_array('EUCARISTIA', $sacr, true) ? 'checked' : '' }}>
                <span>Eucaristia</span>
              </label>
              <label class="opt">
                <input type="checkbox" name="sacramentos[]" value="CRISMA" {{ in_array('CRISMA', $sacr, true) ? 'checked' : '' }}>
                <span>Crisma</span>
              </label>
            </div>
            @error('sacramentos') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          @php
            $partAtual = old('participa_igreja', $wizard['data']['step4']['participa_igreja'] ?? '');
          @endphp
          <div class="field">
            <label class="label">Participa da Igreja Católica Apostólica Romana?<span class="req">*</span></label>
            <div class="inline-options">
              <label class="opt">
                <input type="radio" name="participa_igreja" value="NAO" {{ $partAtual==='NAO' ? 'checked' : '' }}>
                <span>Não</span>
              </label>
              <label class="opt">
                <input type="radio" name="participa_igreja" value="SIM" {{ $partAtual==='SIM' ? 'checked' : '' }}>
                <span>Sim</span>
              </label>
            </div>
            @error('participa_igreja') <div class="error-box">{{ $message }}</div> @enderror
          </div>

          @php
            $estadoCivil = $wizard['data']['step2']['estado_civil'] ?? null;
            $passoVoltar = $estadoCivil === 'CASADO' ? 3 : 2;
          @endphp

          <div class="actions">
            <a class="btn-link" href="{{ url('cursilho/'.$sexo.'/'.$numero.'/passo/'.$passoVoltar) }}">Voltar</a>
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

      function formatCep(v){
        const d = onlyDigits(v).slice(0, 8);
        if (d.length <= 5) return d;
        return d.slice(0,5) + '-' + d.slice(5);
      }

      function formatPhone(v){
        const d = onlyDigits(v).slice(0, 11);
        if (d.length <= 2) return '(' + d;
        if (d.length <= 6) return '(' + d.slice(0,2) + ') ' + d.slice(2);
        if (d.length <= 10) return '(' + d.slice(0,2) + ') ' + d.slice(2,6) + '-' + d.slice(6);
        return '(' + d.slice(0,2) + ') ' + d.slice(2,7) + '-' + d.slice(7);
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

      const cep = document.getElementById('cep');
      const tel = document.getElementById('telefone');
      const nomeMae = document.getElementById('nome_mae');
      const profissao = document.getElementById('profissao');
      const endereco = document.getElementById('endereco');
      const bairro = document.getElementById('bairro');
      const cidade = document.getElementById('cidade');
      const estado = document.getElementById('estado');
      const cepLoading = document.getElementById('cep-loading');

      let ultimoCepPesquisado = '';

      forceUppercaseInput(nomeMae);
      forceUppercaseInput(profissao);
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

      if (tel) {
        tel.addEventListener('input', function () {
          tel.value = formatPhone(tel.value);
        });

        tel.value = formatPhone(tel.value);
      }

      async function buscarCep(cepDigits) {
        ultimoCepPesquisado = cepDigits;
        cepLoading.classList.add('show');

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
          cepLoading.classList.remove('show');
        }
      }
    })();
  </script>
</body>
</html>