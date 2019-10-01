<?php

namespace App\Models;

class Product
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;        
    }

    public function isReducedTaxRate()
    {
        if ($this->name === 'リポビタンD' || $this->name === 'キリンチューハイ氷結グレープフルーツ350ml缶') {
            return false;
        }
        return true;
    }
}
