<?php

namespace App\Models;

class Drink implements Product
{
    private $no_taxed_price;

    const LIST = [
        'キリン生茶555mlペットボトル' => 140,
        'オロナミンC' => 105
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
