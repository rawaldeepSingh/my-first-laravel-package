<<<<<<< HEAD
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

    /** @test */
    public function the_config_file_value_is_used_as_output()
    {
        $this->artisan('my-first-laravel-package')
            ->expectsOutput('Hi from command')
            ->assertExitCode(0);

        $text = 'customised text';

        config()->set('my-first-laravel-package.command_output_text', $text);

        $this->artisan('my-first-laravel-package')
            ->expectsOutput($text)
            ->assertExitCode(0);
    }
}
=======
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
>>>>>>> 412f1668e30a3df2195538cef5ba0e2413385c2b
