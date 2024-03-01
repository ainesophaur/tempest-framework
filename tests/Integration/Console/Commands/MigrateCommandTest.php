<?php

declare(strict_types=1);

namespace Tests\Tempest\Integration\Console\Commands;

use Tests\Tempest\Integration\TestCase;

class MigrateCommandTest extends TestCase
{
    /** @test */
    public function test_migrate_command()
    {
        $output = $this->console('migrate')->asText();

        $this->assertStringContainsString('create_migrations_table', $output);
    }
}