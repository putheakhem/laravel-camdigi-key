<?php

declare(strict_types=1);

namespace PutheaKhem\LaravelCamDigiKey\Console;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

final class SetupCamDigiKey extends Command
{
    protected $signature = 'camdigikey:setup';

    protected $description = 'Automatically clone CamDigiKey Node.js library';

    public function handle()
    {
        $path = base_path('vendor/putheakhem/laravel-camdigi-key/node-lib');
        if (is_dir($path)) {
            $this->info('✅ CamDigiKey Node.js library already exists.');

            return 0;
        }

        $this->info('🚀 Cloning CamDigiKey Node.js library from GitHub...');
        $process = new Process([
            'git', 'clone',
            'https://github.com/Techo-Startup-Center/camdigikey-client-library-node.git',
            $path,
        ]);

        $process->run(function ($type, $buffer) {
            echo $buffer;
        });

        if (! $process->isSuccessful()) {
            $this->error('❌ Failed to clone the repository.');

            return 1;
        }

        $this->info('✅ CamDigiKey Node.js library successfully cloned.');

        return 0;
    }
}
