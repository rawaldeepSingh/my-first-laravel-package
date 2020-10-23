<?php

namespace Spatie\MyFirstLaravelPackage\Tests\Feature\Models;

use Illuminate\Support\Facades\DB;
use Spatie\MyFirstLaravelPackage\Models\MyModel;
use Spatie\MyFirstLaravelPackage\Tests\TestCase;

class MyModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {
        // dd(MyModel::factory()->make());
        /** @var MyModel $model */
        $model = MyModel::create(['name' => 'John']);

        $this->assertDatabaseCount('my_models', 1);

        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }

        /** @test */
        public function it_can_use_json_queries()
        {
            $models = DB::table('my_models')
                ->whereJsonContains('options->languages', 'en')
                ->get();

            $this->assertCount(0, $models);
        }
}