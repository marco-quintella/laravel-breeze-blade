<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DatabaseUrlTest extends TestCase
{
    public function test_db_url_selects_mysql_even_when_db_connection_is_sqlite(): void
    {
        $this->assertSame('mysql', $this->bootedDefaultConnection(
            'sqlite',
            'mysql://root:***@mysql.railway.internal:3306/railway',
        ));
    }

    public function test_composer_requires_pdo_mysql_even_when_the_env_says_sqlite(): void
    {
        $composer = json_decode(file_get_contents(dirname(__DIR__, 2).'/composer.json'), true);

        $this->assertArrayHasKey('ext-pdo_mysql', $composer['require']);
    }

    public function test_sqlite_remains_the_default_without_a_database_url(): void
    {
        $this->assertSame('sqlite', $this->bootedDefaultConnection('sqlite', ''));
    }

    private function bootedDefaultConnection(string $connection, string $url): string
    {
        $code = <<<'PHP'
        putenv('APP_ENV=testing');
        putenv('APP_KEY=base64:AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=');
        putenv('DB_CONNECTION='.getenv('CHECK_DB_CONNECTION'));
        putenv('DB_URL='.getenv('CHECK_DB_URL'));
        putenv('DB_DATABASE=:memory:');
        $_ENV['DB_CONNECTION'] = getenv('CHECK_DB_CONNECTION');
        $_ENV['DB_URL'] = getenv('CHECK_DB_URL');
        $_SERVER['DB_CONNECTION'] = getenv('CHECK_DB_CONNECTION');
        $_SERVER['DB_URL'] = getenv('CHECK_DB_URL');
        require 'vendor/autoload.php';
        $app = require 'bootstrap/app.php';
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        echo config('database.default');
        PHP;

        $command = sprintf(
            'cd %s && CHECK_DB_CONNECTION=%s CHECK_DB_URL=%s php -r %s',
            escapeshellarg(dirname(__DIR__, 2)),
            escapeshellarg($connection),
            escapeshellarg($url),
            escapeshellarg($code),
        );

        $output = shell_exec($command);

        $this->assertIsString($output);

        return trim($output);
    }
}
