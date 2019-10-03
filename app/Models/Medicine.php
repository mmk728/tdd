<?php

namespace App\Models;

class Medicine extends Product
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->no_taxed_price = 871;        
    }

    public function isReducedTaxRate()
    {
        return false;
    }
}
