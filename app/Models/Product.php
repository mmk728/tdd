<?php

namespace App\Models;

class Product
{
    public $name;
    public $no_taxed_price;
    public $total_no_taxed_price = [];

    protected $tax_rate = 10;

    public function __get($key)
    {
        if (property_exists($this, $key) === false) {
            throw new \UnexpectedValueException();
        }
        return $this->$key;
    }

    public function add()
    {
        if (array_key_exists($this->name, $this->total_no_taxed_price) === false) {
            $this->total_no_taxed_price += [$this->name => 0];
        }
        $this->total_no_taxed_price[$this->name] += $this->no_taxed_price;
    }

    public function totalTaxedPrice()
    {
        return intval($this->total_no_taxed_price[$this->name] * (1 + $this->tax_rate / 100));
    }
}
