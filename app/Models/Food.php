<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food implements Product
{
    private $no_taxed_price;

    const LIST = [
        '手巻き直火焼き紅しゃけ' => 139,
        '大きなおむすびマヨネーズ' => 186,
        'からあげ棒' => 114
    ];

    public function __construct($name)
    {
        $this->no_taxed_price = self::LIST[$name];
    }

    public function isReducedTaxRate()
    {
        return true;
    }

    public function __get($key)
    {
        if (property_exists($this, $key) === false) {
            throw new \UnexpectedValueException();
        }
        return $this->$key;
    }
}
