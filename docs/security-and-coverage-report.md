# Relatorio de seguranca e cobertura

## Hash analisado

- Commit base informado: `a51a53b`

## Vulnerabilidades e riscos corrigidos

- Login da secretaria protegido por rate limit por e-mail normalizado + IP.
- Recuperacao de senha protegida por rate limit por e-mail normalizado + IP.
- Usuario inativo bloqueado no login e nos middlewares de role/permissao.
- Reset de senha para usuario inativo bloqueado sem revelar status da conta.
- Token valido de usuario inativo nao altera senha nem renova `remember_token`.
- Comprovante base64 limitado a aproximadamente 1 MB, com MIME permitido e assinatura real de PDF, PNG ou JPEG.
- Exportacao CSV neutraliza valores iniciados por `=`, `+`, `-`, `@`, tab e carriage return.
- Sanitizacao HTML reforcada para remover `script`, `onerror` e `javascript:`.
- Autorizacao negativa reforcada para rotas criticas de eventos, inscricoes, roles, permissoes e usuarios.
- Detector de unique constraint de CPF tem teste unitario e teste com duplicate key real no MySQL, com skip controlado fora de MySQL.

## Testes adicionados ou reforcados

- Reset de senha: usuario ativo, inexistente e inativo com mesma mensagem generica; inativo sem notificacao; token inativo sem alteracao de senha.
- Rate limit: login e reset por e-mail + IP, limpeza de contador no login valido, bloqueio generico no reset.
- Usuario ativo/inativo: bloqueio de sessao antiga, ativacao/desativacao no admin, protecao do ultimo super-admin ativo.
- Comprovante: PDF/PNG/JPEG validos, MIME invalido, base64 invalido, payload gigante e conteudo falso com prefixo valido.
- CSV: export global, export por evento, permissao `inscricao.export`, soft-deleted fora do padrao, caracteres especiais e CSV injection.
- Delete/restore: permissoes, bloqueios por pagamento/finalizacao, conflito de CPF ativo e listagem de excluidas.
- Eventos: validacoes de nome, numero unico, datas, tipo/publico/status/ativo, regras com inscricoes e HTML sanitizado.
- Fluxos publicos: Cursilho e Assembleia mantidos com testes de start, passos, CPF duplicado, erro de constraint, e-mails e pagina finalizada.

## Coverage medido

- Coverage local: nao medido.
- Motivo: o ambiente local nao possui Xdebug ou PCOV; `php artisan test --coverage` encerra com `Code coverage driver not available`.
- Coverage no CI: pendente de execucao do GitHub Actions.
- Testes locais sem coverage: `263 passed`, `2 skipped`, `941 assertions`.

## Threshold aplicado no CI

- Nenhum `--min` foi aplicado nesta rodada.
- Regra adotada: nao aplicar `--min=80` nem threshold incremental sem percentual real medido.
- Plano: aplicar `--min=70`, depois `--min=75`, depois `--min=80` conforme o job `coverage` confirmar cada patamar.

## Riscos residuais

- `npm ci` reporta 2 vulnerabilidades no audit, sendo 1 moderada e 1 alta. Requer avaliacao separada com `npm audit`/atualizacao de dependencias.
- Testes MySQL reais nao foram executados localmente; ficam cobertos pelo job `mysql-critical`.
- Coverage depende de Xdebug/PCOV no CI para obter percentual real e definir threshold seguro.

## Proximos passos recomendados

- Rodar GitHub Actions `coverage` e registrar o percentual real neste documento.
- Rodar GitHub Actions `mysql-critical` para validar duplicate key real em MySQL 8.
- Avaliar `npm audit` e atualizar dependencias sem quebrar Vite/Laravel.
- Aplicar threshold incremental de coverage assim que o percentual real permitir.

## Comandos executados

- `composer validate`
- `composer check-platform-reqs`
- `vendor/bin/pint --test`
- `php artisan test`
- `php artisan test --coverage`
- `php artisan route:list`
- `npm ci`
- `npm run build`
- `COMPOSER_ALLOW_SUPERUSER=1 composer test`
