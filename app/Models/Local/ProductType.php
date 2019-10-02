<?php

namespace App\Models\Local;

class ProductType
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;        
    }

    public function typeName()
    {
        if ($this->name === 'キリン生茶555mlペットボトル' || $this->name === 'オロナミンC') {
            return 'drink';
        }
        if ($this->name === 'キリンチューハイ氷結グレープフルーツ350ml缶' || $this->name === 'ストロングゼロ〈ダブルグレープフルーツ〉350ml缶') {
            return 'liquor';
        }
        if ($this->name === '新ルルA錠s50錠') {
            return 'medicine';
        }
        if ($this->name === 'リポビタンD') {
            return 'quasi_drug';
        }
        return 'food';
    }
}
