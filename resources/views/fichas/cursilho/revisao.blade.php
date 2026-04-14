<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inscrição Cursilho — Revisão — {{ strtoupper($sexoLabel) }} — {{ $numero }}º</title>

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
    .section{margin-top:14px;border:1px solid var(--border);border-radius:12px;overflow:hidden;background:#fff;}
    .section-head{background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;}
    .section-body{padding:12px;}
    .row{padding:10px 0;border-bottom:1px solid var(--border);}
    .row:last-child{border-bottom:0;}
    .k{font-size:12px;letter-spacing:.4px;color:var(--muted);font-weight:800;margin-bottom:4px;}
    .v{font-size:15px;color:var(--text);white-space:pre-wrap;}
    .muted{color:var(--muted);font-size:12px;}
    .actions{margin-top:16px;display:flex;gap:10px;flex-wrap:wrap;}
    .btn{appearance:none;border:0;border-radius:10px;padding:12px 16px;font-weight:800;font-size:15px;cursor:pointer;user-select:none;}
    .btn-primary{background:var(--primary);color:#fff;}
    .btn-primary:hover{background:var(--primary-hover);}
    .btn-link{background:transparent;border:1px solid var(--border);color:var(--text);text-decoration:none;display:inline-flex;align-items:center;justify-content:center;padding:12px 16px;border-radius:10px;font-weight:800;font-size:15px;}
    .pix-box{
      display:grid;
      grid-template-columns: 1fr;
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

    @media (min-width: 900px){
      .pix-box{
        grid-template-columns: minmax(0, 1.2fr) minmax(280px, 340px);
        gap:28px;
      }

      .pix-qr-wrap{
        justify-content:flex-end;
      }
    }
    .footer{padding:14px 18px;border-top:1px solid var(--border);color:var(--muted);font-size:12px;}
    @media (min-width:768px){
      .wrap{padding:28px;}
      .banner{height:180px;}
      .content{padding:26px 28px 30px;}
      .title{font-size:28px;}
      .subtitle{font-size:15px;}
      .pix-box{flex-direction:row;align-items:center;}
    }
  </style>
</head>

@php
  $d = $wizard['data'] ?? [];
  $s = $wizard['steps'] ?? [];

  $step2 = $d['step2'] ?? [];
  $step3 = $d['step3'] ?? [];
  $step4 = $d['step4'] ?? [];
  $step5 = $d['step5'] ?? [];
  $step6 = $d['step6'] ?? [];

  $showStep3 = !isset($step3['skipped']) && ($s['step3'] ?? false);
  $showStep5 = !isset($step5['skipped']) && ($s['step5'] ?? false);

  $cpf = $step2['cpf'] ?? '';
  if (is_string($cpf) && preg_match('/^\d{11}$/', $cpf)) {
    $cpf = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
  }

  $tel = $step4['telefone'] ?? '';
  if (is_string($tel) && preg_match('/^\d{10,11}$/', $tel)) {
    $tel = (strlen($tel) === 10)
      ? preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $tel)
      : preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $tel);
  }

  $cep = $step4['cep'] ?? '';
  if (is_string($cep) && preg_match('/^\d{8}$/', $cep)) {
    $cep = preg_replace('/(\d{5})(\d{3})/', '$1-$2', $cep);
  }

  $sacr = $step4['sacramentos'] ?? [];
  if (!is_array($sacr)) $sacr = [];
@endphp

<body>
  <div class="wrap">
    <main class="card">
      <header class="banner">
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Banner do MCC">
      </header>

      <section class="content">
        <h2 class="title">Revisão da Inscrição</h2>
        <p class="subtitle">Confira todos os dados antes de enviar</p>

        <div class="badge">
          <span>Revisão da ficha de inscrição para: {{ $numero }}º Cursilho de {{ strtoupper($sexoLabel) }} </span>
        </div>

        {{-- DADOS PESSOAIS (Passo 2) --}}
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
              <div class="k">Estado civil</div>
              <div class="v">{{ $step2['estado_civil'] ?? '-' }}</div>
            </div>
            <div class="row">
              <div class="k">CPF</div>
              <div class="v">{{ $cpf ?: '-' }}</div>
            </div>
          </div>
        </div>

        {{-- CASAMENTO (Passo 3 - condicional) --}}
        @if($showStep3)
          <div class="section">
            <div class="section-head">Sobre o casamento</div>
            <div class="section-body">
              <div class="row">
                <div class="k">Data do casamento</div>
                <div class="v">{{ $step3['data_casamento'] ?? '-' }}</div>
              </div>
              <div class="row">
                <div class="k">Cidade que casou</div>
                <div class="v">{{ $step3['cidade_casou'] ?? '-' }}</div>
              </div>
              <div class="row">
                <div class="k">Igreja em que casou</div>
                <div class="v">{{ $step3['igreja_casou'] ?? '-' }}</div>
              </div>
            </div>
          </div>
        @endif

        {{-- OUTRAS INFORMAÇÕES (Passo 4) --}}
        <div class="section">
          <div class="section-head">Outras informações</div>
          <div class="section-body">
            <div class="row"><div class="k">Nome da mãe</div><div class="v">{{ $step4['nome_mae'] ?? '-' }}</div></div>
            <div class="row"><div class="k">Número de filhos</div><div class="v">{{ $step4['numero_filhos'] ?? '-' }}</div></div>
            <div class="row"><div class="k">Profissão</div><div class="v">{{ $step4['profissao'] ?? '-' }}</div></div>
            <div class="row"><div class="k">Telefone</div><div class="v">{{ $tel ?: '-' }}</div></div>
            <div class="row"><div class="k">E-mail</div><div class="v">{{ $step4['email'] ?? '-' }}</div></div>
            <div class="row"><div class="k">Grau de instrução</div><div class="v">{{ $step4['grau_instrucao'] ?? '-' }}</div></div>
            <div class="row"><div class="k">CEP</div><div class="v">{{ $cep ?: '-' }}</div></div>
            <div class="row"><div class="k">Endereço</div><div class="v">{{ $step4['endereco'] ?? '-' }}</div></div>
            <div class="row"><div class="k">Bairro</div><div class="v">{{ $step4['bairro'] ?? '-' }}</div></div>
            <div class="row"><div class="k">Cidade</div><div class="v">{{ $step4['cidade'] ?? '-' }}</div></div>
            <div class="row"><div class="k">Estado (UF)</div><div class="v">{{ $step4['estado'] ?? '-' }}</div></div>

            <div class="row">
              <div class="k">Sacramentos</div>
              <div class="v">
                @if(count($sacr))
                  {{ implode(', ', $sacr) }}
                @else
                  -
                @endif
              </div>
            </div>

            <div class="row">
              <div class="k">Participa da Igreja Católica Apostólica Romana?</div>
              <div class="v">{{ $step4['participa_igreja'] ?? '-' }}</div>
            </div>
          </div>
        </div>

        {{-- PASTORAL (Passo 5 - condicional) --}}
        @if($showStep5)
          <div class="section">
            <div class="section-head">Pastoral</div>
            <div class="section-body">
              <div class="row"><div class="k">Paróquia</div><div class="v">{{ $step5['paroquia'] ?? '-' }}</div></div>
              <div class="row"><div class="k">Participa de alguma pastoral?</div><div class="v">{{ $step5['participa_pastoral'] ?? '-' }}</div></div>
              @if(($step5['participa_pastoral'] ?? null) === 'SIM')
                <div class="row"><div class="k">Quais pastorais</div><div class="v">{{ $step5['quais_pastorais'] ?? '-' }}</div></div>
              @endif
            </div>
          </div>
        @endif

        {{-- INFORMAÇÕES FINAIS (Passo 6) --}}
        <div class="section">
          <div class="section-head">Informações finais</div>
          <div class="section-body">
            <div class="row">
              <div class="k">Contato da família (missa de encerramento) — nome e fone</div>
              <div class="v">{{ $step6['contato_familia_missa'] ?? '-' }}</div>
            </div>
            <div class="row">
              <div class="k">Alimentação especial — restrições</div>
              <div class="v">{{ $step6['alimentacao_especial'] ?? '-' }}</div>
            </div>
            <div class="row">
              <div class="k">Padrinho/Madrinha (nome e fone)</div>
              <div class="v">{{ $step6['padrinho_madrinha_contato'] ?? '-' }}</div>
            </div>
          </div>
        </div>

        {{-- BLOCO PIX (do print) --}}
        <div class="section">
          <div class="section-head">Pagamento / PIX</div>
          <div class="section-body">
            <div class="pix-box">
              <div class="pix-info">
                <p class="pix-line">
                  <strong>Taxa:</strong>
                    {{ isset($evento) && isset($evento->valor_contribuicao) && $evento->valor_contribuicao !== null
                        ? 'R$ ' . number_format((float) $evento->valor_contribuicao, 2, ',', '.')
                        : 'R$ 50,00' }}
                </p>

                <p class="pix-line">
                  <strong>Chave PIX:</strong> {{ $evento->pix_chave }} — {{ $evento->pix_banco }}<br>
                  <strong>Favorecido:</strong> {{ $evento->pix_favorecido }}
                </p>

                <p class="pix-line">
                  <strong>Início:</strong> {{ $evento->inicio_descricao ?? 'Não informado' }}<br>
                  <strong>Saída:</strong> {{ $evento->final_descricao ?? 'Não informado' }}
                </p>

                <p class="pix-line">
                  <strong>Comprovante:</strong> enviar para o WhatsApp
                  <strong>{{ $evento->comprovante_whatsapp }}</strong> — A/c {{ $evento->comprovante_responsavel }}
                </p>

                <p class="pix-note">
                  Escaneie o QR Code para pagar via PIX.
                </p>
              </div>

              <div class="pix-qr-wrap">
                <div class="pix-qr">
                  <img src="{{ asset('assets/img/pix.png') }}" alt="QR Code PIX">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="actions">
          <a class="btn-link" href="{{ url('cursilho/'.$sexo.'/'.$numero.'/passo/6') }}">Voltar</a>

          <form method="POST" action="{{ url('cursilho/'.$sexo.'/'.$numero.'/finalizar') }}">
            @csrf
            <button class="btn btn-primary" type="submit">Confirmo que está tudo correto</button>
          </form>
        </div>
      </section>

      <footer class="footer">
        Revisão • {{ strtoupper($sexoLabel) }} / {{ $numero }}
      </footer>
    </main>
  </div>
</body>
</html>