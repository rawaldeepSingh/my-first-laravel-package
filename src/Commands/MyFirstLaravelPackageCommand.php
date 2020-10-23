<?php

namespace Spatie\MyFirstLaravelPackage\Commands;

use Illuminate\Console\Command;

class MyFirstLaravelPackageCommand extends Command
{
    public $signature = 'my-first-laravel-package';

    public $description = 'My command';

    public function handle()
    {
        $outputText = config('my-first-laravel-package.command_output_text');

        $this->comment($outputText);
    }
}
