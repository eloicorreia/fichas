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

O ambiente local precisa de Xdebug ou PCOV para calcular coverage. Sem um desses drivers, o comando encerra com a mensagem `Code coverage driver not available`.

O workflow `Coverage` em `.github/workflows/coverage.yml` roda em `push` para `main`, `pull_request` e também manualmente (`workflow_dispatch`). Ele instala Xdebug e gera o relatório de coverage sem exigir percentual mínimo por enquanto.

Cobertura atual neste ambiente: não calculada, porque o PHP local não tem Xdebug/PCOV carregado.

Meta: quando a medição do CI ou de um ambiente local com Xdebug/PCOV confirmar cobertura igual ou superior a 70%, atualizar o workflow para usar `php artisan test --coverage --min=70`.
