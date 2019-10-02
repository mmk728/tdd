<?php

namespace App\Factories;

class ProductFactory
{
    public static function create($type)
    {
        $model_name = "App\\Models\\" . self::upperCamelize($type);
        return new $model_name;
    }

    public static function upperCamelize($str)
    {
        return strtr(ucwords(strtr($str, ['_' => ' '])), [' ' => '']);
    }
}
