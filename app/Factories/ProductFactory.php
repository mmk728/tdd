<?php

namespace App\Factories;

use App\Models\Drink;
use App\Models\Food;
use App\Models\Liquor;

class ProductFactory
{
    public static function create($type)
    {
        if ($type === 'liquor') {
            return new Liquor();
        }
        if ($type === 'drink') {
            return new Drink();
        }
        return new Food();
    }
}
