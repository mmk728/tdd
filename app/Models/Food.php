<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Product
{
    protected $tax_rate = 8;

    const LIST = [
        '手巻き直火焼き紅しゃけ' => 139,
        '大きなおむすびマヨネーズ' => 186,
        'からあげ棒' => 114
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
