<?php

namespace App\Models;

class Medicine implements Product
{
    private $name;
    private $no_taxed_price;

    public function __construct($name)
    {
        $this->name = $name;
        $this->no_taxed_price = 871;        
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
