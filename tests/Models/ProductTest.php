<?php

namespace Tests\Models;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function オロナミンCは軽減税率の対象である()
    {
        $product = new Product($name = 'オロナミンC');
        $this->assertTrue($product->isReducedTaxRate());
    }

    /** @test */
    public function リポビタンDは軽減税率の対象でない()
    {
        $product = new Product($name = 'リポビタンD');
        $this->assertFalse($product->isReducedTaxRate());
    }
}
