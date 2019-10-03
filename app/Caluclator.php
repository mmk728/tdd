<?php

namespace App;

class Caluclator
{
    private $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function total()
    {
        $total_price = 0;
        foreach ($this->products as $product) {
            $total_price += $product->totalTaxedPrice();
        }
        return $total_price;
    }
}
