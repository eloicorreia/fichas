# Testes e coverage

Comandos principais para validação local:

```bash
composer validate
composer check-platform-reqs
php artisan test
vendor/bin/pint --test
npm ci
npm run build
```

Coverage local, quando o driver de coverage estiver disponível:

```bash
php artisan test --coverage
```

O workflow `Coverage` em `.github/workflows/coverage.yml` roda em `push` para `main`, `pull_request` e também manualmente (`workflow_dispatch`). Ele gera o relatório de coverage sem exigir percentual mínimo por enquanto.
