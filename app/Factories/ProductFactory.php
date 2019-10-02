<?php

namespace App\Factories;

use App\Models\Drink;
use App\Models\Food;
use App\Models\Liquor;

class ProductFactory
{
    public static function create($type)
    {
        $model_name = "App\\Models\\" . ucfirst($type);
        return new $model_name;
    }
}
