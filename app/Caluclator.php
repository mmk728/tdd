<?php

namespace App;

class Caluclator
{
    private $products;
    private $is_reduced_tax = [];
    private $is_not_reduced_tax = [];

    const REDUCED_TAXED_RATE = 8;
    const NO_REDUCED_TAX_RATE = 10;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function total()
    {
        foreach ($this->products as $product) {
            if ($product->isReducedTaxRate()) {
                if (array_key_exists($product->name, $this->is_reduced_tax) === false) {
                    $this->is_reduced_tax += [$product->name => 0];
                }
                $this->is_reduced_tax[$product->name] += $product->no_taxed_price;
                continue;
            }
            if (array_key_exists($product->name, $this->is_not_reduced_tax) === false) {
                $this->is_not_reduced_tax += [$product->name => 0];
            }
            $this->is_not_reduced_tax[$product->name] += $product->no_taxed_price;
        }
        return intval($this->isReducedTaxTotal() + $this->isNotReducedTaxTotal());
    }

    private function isReducedTaxTotal()
    {
        $is_reduced_tax_total = 0;
        foreach ($this->is_reduced_tax as $product_total) {
            $is_reduced_tax_total += intval($product_total * (1 + self::REDUCED_TAXED_RATE / 100));
        }
        return $is_reduced_tax_total;
    }

    private function isNotReducedTaxTotal()
    {
        $is_not_reduced_tax_total = 0;
        foreach ($this->is_not_reduced_tax as $product_total) {
            $is_not_reduced_tax_total += intval($product_total * (1 + self::NO_REDUCED_TAX_RATE / 100));
        }
        return $is_not_reduced_tax_total;
    }
}
