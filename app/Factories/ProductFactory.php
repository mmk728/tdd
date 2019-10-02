<?php

namespace App\Factories;

use App\Models\Drink;
use App\Models\Food;

class ProductFactory
{
    public static function create($type)
    {
        if ($type === 'drink') {
            return new Drink();
        }
        return new Food();
    }
}
