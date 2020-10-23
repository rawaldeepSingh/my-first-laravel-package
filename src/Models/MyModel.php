<?php

namespace Spatie\MyFirstLaravelPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;
    public $guarded = [];

    public function getUpperCasedName(): string
    {
        return strtoupper($this->name);
    }
}
