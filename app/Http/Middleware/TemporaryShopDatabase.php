<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

class TemporaryShopDatabase
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {
        $directory = storage_path('app/demo-databases');

        if (
            ! is_dir($directory)
            && ! mkdir($directory, 0755, true)
            && ! is_dir($directory)
        ) {
            throw new RuntimeException(
                'Could not create the demo database directory.'
            );
        }

        $sessionId = $request->session()->getId();

        $databasePath = $directory . '/'
            . hash('sha256', $sessionId) . '.sqlite';

        $isNew = ! file_exists($databasePath);

        if (
            $isNew
            && file_put_contents($databasePath, '') === false
        ) {
            throw new RuntimeException(
                'Could not create the demo database file.'
            );
        }

        config([
            'database.connections.tenant.database' => $databasePath,
            'database.default' => 'tenant',
        ]);

        DB::purge('tenant');

        if ($isNew) {
            try {
                $migrationResult = Artisan::call('migrate', [
                    '--database' => 'tenant',
                    '--force' => true,
                    '--no-interaction' => true,
                ]);

                if ($migrationResult !== 0) {
                    throw new RuntimeException(
                        'Migration failed: ' . Artisan::output()
                    );
                }

                $seedResult = Artisan::call('db:seed', [
                    '--database' => 'tenant',
                    '--class' => 'Database\\Seeders\\DatabaseSeeder',
                    '--force' => true,
                    '--no-interaction' => true,
                ]);

                if ($seedResult !== 0) {
                    throw new RuntimeException(
                        'Seeding failed: ' . Artisan::output()
                    );
                }
            } catch (\Throwable $e) {
                DB::purge('tenant');

                if (file_exists($databasePath)) {
                    @unlink($databasePath);
                }

                throw $e;
            }
        }

        touch($databasePath);

        return $next($request);
    }
}