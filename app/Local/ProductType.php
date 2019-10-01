<?php

namespace App\Local;

class ProductType
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;        
    }

    public function typeName()
    {
        if ($this->name === 'キリン生茶555mlペットボトル') {
            return '飲料品';
        }
        if ($this->name === 'キリンチューハイ氷結グレープフルーツ350ml缶') {
            return '酒類';
        }
        if ($this->name === '新ルルA錠s50錠') {
            return '医薬品';
        }
        if ($this->name === 'リポビタンD') {
            return '医薬部外品';
        }
        return '食料品';
    }
}
