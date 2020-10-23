<?php

namespace Spatie\MyFirstLaravelPackage\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\MyFirstLaravelPackage\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName
        ];
    }
}
