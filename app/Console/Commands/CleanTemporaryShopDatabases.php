<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanTemporaryShopDatabases extends Command
{
    protected $signature = 'shop:databases:cleanup';

    protected $description = 'Delete temporary shop databases inactive for 24 hours';

    public function handle(): int
    {
        $directory = storage_path('app/demo-databases');

        if (! is_dir($directory)) {
            $this->info('No temporary database directory found.');

            return self::SUCCESS;
        }

        $cutoff = time() - (24 * 60 * 60);
        $deleted = 0;

        foreach (glob($directory . '/*.sqlite') ?: [] as $file) {
            if (! is_file($file)) {
                continue;
            }

            $lastActivity = @filemtime($file);

            if ($lastActivity === false || $lastActivity >= $cutoff) {
                continue;
            }

            if (@unlink($file)) {
                $deleted++;
            } else {
                $this->warn('Could not delete: ' . basename($file));
            }
        }

        $this->info("Cleanup complete. Deleted {$deleted} database(s).");

        return self::SUCCESS;
    }
}
