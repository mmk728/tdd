<?php

namespace App\Models;

class QuasiDrug extends Product
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->no_taxed_price = 146;
    }

    public function isReducedTaxRate()
    {
        return false;
    }
}
