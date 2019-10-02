<?php

namespace App\Models;

class Liquor implements Product
{
    private $no_taxed_price;

    public function __construct()
    {
        $this->no_taxed_price = 141;
    }

    public function isReducedTaxRate()
    {
        return false;
    }

    public function __get($key)
    {
        return $this->$key;
    }
}
