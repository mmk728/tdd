<?php

namespace App\Models;

class Liquor extends Product
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->no_taxed_price = 141;
    }

    public function isReducedTaxRate()
    {
        return false;
    }
}
