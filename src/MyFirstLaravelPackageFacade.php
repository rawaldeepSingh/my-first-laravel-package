<?php

namespace Spatie\MyFirstLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\MyFirstLaravelPackage\MyFirstLaravelPackage
 */
class MyFirstLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-first-laravel-package';
    }
}
