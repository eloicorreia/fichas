<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inscrição já confirmada</title>

  <style>
    :root{
      --bg:#f4f6fb; --card:#fff; --text:#111827; --muted:#4b5563; --border:#e5e7eb;
      --shadow:0 10px 30px rgba(17,24,39,.10); --radius:14px;
      --primary:#2563eb; --primary-hover:#1d4ed8;
    }
    *{box-sizing:border-box;}
    body{margin:0;font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;color:var(--text);background:var(--bg);}
    .wrap{min-height:100vh;padding:16px;display:flex;align-items:center;justify-content:center;}
    .card{width:100%;max-width:720px;background:var(--card);border:1px solid var(--border);border-radius:var(--radius);box-shadow:var(--shadow);padding:28px;}
    h1{margin:0 0 12px;font-size:28px;}
    p{margin:0 0 12px;line-height:1.6;color:var(--muted);}
    .actions{margin-top:20px;}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:12px 16px;border-radius:10px;background:var(--primary);color:#fff;text-decoration:none;font-weight:800;}
    .btn:hover{background:var(--primary-hover);}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>Inscrição já confirmada</h1>
      <p>Identificamos que já existe uma inscrição para este evento com o CPF informado.</p>
      <p>Para evitar duplicidade, o sistema não permite continuar com um novo preenchimento.</p>
      <div class="actions">
        <a class="btn btn-primary" href="{{ url('cursilho/' . $publicoEvento) }}">
          Voltar
        </a>
      </div>
    </div>
  </div>
</body>
</html>