<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Concerns\CreatesSecretariaData;
use Tests\TestCase;

class CiWorkflowTest extends TestCase
{
    use CreatesSecretariaData;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpSecretariaData();
    }

    public function test_ci_workflow_executa_comandos_obrigatorios(): void
    {
        $workflow = file_get_contents(base_path('.github/workflows/ci.yml'));

        $this->assertIsString($workflow);
        $this->assertStringContainsString('composer validate', $workflow);
        $this->assertStringContainsString('composer check-platform-reqs', $workflow);
        $this->assertStringContainsString('php artisan test', $workflow);
        $this->assertStringContainsString('vendor/bin/pint --test', $workflow);
        $this->assertStringContainsString('npm ci', $workflow);
        $this->assertStringContainsString('npm run build', $workflow);
        $this->assertStringContainsString('DB_CONNECTION: sqlite', $workflow);
        $this->assertStringContainsString('DB_DATABASE: database/database.sqlite', $workflow);
        $this->assertStringContainsString('CACHE_STORE: array', $workflow);
        $this->assertStringContainsString('SESSION_DRIVER: array', $workflow);
        $this->assertStringContainsString('QUEUE_CONNECTION: sync', $workflow);
        $this->assertStringContainsString('MAIL_MAILER: array', $workflow);
        $this->assertStringContainsString('touch database/database.sqlite', $workflow);
    }
}
