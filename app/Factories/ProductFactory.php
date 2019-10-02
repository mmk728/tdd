<?php

namespace App\Factories;

use App\Models\Local\ProductType;

class ProductFactory
{
    public static function create($name)
    {
        $type = (new ProductType($name))->typeName();
        $model_name = "App\\Models\\" . self::upperCamelize($type);
        return new $model_name;
    }

    private static function upperCamelize($str)
    {
        return strtr(ucwords(strtr($str, ['_' => ' '])), [' ' => '']);
    }
}
