<?php

namespace App\Models;

class Drink extends Product
{
    protected $tax_rate = 8;
    
    const LIST = [
        'キリン生茶555mlペットボトル' => 140,
        'オロナミンC' => 105
    ];

    public function __construct($name)
    {
        $this->name = $name;
        $this->no_taxed_price = self::LIST[$name];
    }

    public function isReducedTaxRate()
    {
        return true;
    }
}
