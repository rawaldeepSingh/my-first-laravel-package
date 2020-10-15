<?php

namespace Spatie\MyFirstLaravelPackage;

use Illuminate\Support\ServiceProvider;
use Spatie\MyFirstLaravelPackage\Commands\MyFirstLaravelPackageCommand;

class MyFirstLaravelPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/my-first-laravel-package.php' => config_path('my-first-laravel-package.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/my-first-laravel-package'),
            ], 'views');

            $migrationFileName = 'create_my_first_laravel_package_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                MyFirstLaravelPackageCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'my-first-laravel-package');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/my-first-laravel-package.php', 'my-first-laravel-package');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
