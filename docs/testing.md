# Testes e coverage

Comandos principais para validação local:

```bash
composer validate
composer check-platform-reqs
composer test
php artisan test
php artisan test --coverage
vendor/bin/pint --test
npm ci
npm run build
```

Coverage local, quando o driver de coverage estiver disponível:

```bash
php artisan test --coverage
```

O ambiente local precisa de Xdebug ou PCOV para calcular coverage. Sem um desses drivers, o comando encerra com a mensagem `Code coverage driver not available`.

O workflow `Coverage` em `.github/workflows/coverage.yml` roda em `push` para `main`, `pull_request` e também manualmente (`workflow_dispatch`). Ele possui dois jobs:

- `coverage`: suíte geral em SQLite, com Xdebug e relatório de coverage.
- `mysql-critical`: suíte crítica em MySQL 8, com PHP 8.3, `pdo_mysql`, `APP_ENV=testing` e `php artisan migrate:fresh --force`.

O relatório de coverage ainda não exige percentual mínimo por enquanto.

Cobertura atual neste ambiente: não calculada, porque o PHP local não tem Xdebug/PCOV carregado.

Meta: quando a medição do CI ou de um ambiente local com Xdebug/PCOV confirmar cobertura igual ou superior a 70%, atualizar o workflow para usar `php artisan test --coverage --min=70`.
