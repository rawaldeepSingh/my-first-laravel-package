<?php

namespace Spatie\MyFirstLaravelPackage\Tests\Feature\Commands;

use Spatie\MyFirstLaravelPackage\Tests\TestCase;

class MyFirstLaravelPackageCommandTest extends TestCase
{
    /** @test */
    public function the_myfirstlaravelpackage_command_works()
    {
        $this->artisan('my-first-laravel-package')->assertExitCode(0);
    }
}