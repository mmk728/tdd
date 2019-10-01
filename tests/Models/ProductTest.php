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

    /** @test */
    public function 手巻き直火焼き紅しゃけは軽減税率の対象である()
    {
        $product = new Product($name = '手巻き直火焼き紅しゃけ');
        $this->assertTrue($product->isReducedTaxRate());
    }

    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶は軽減税率の対象でない()
    {
        $product = new Product($name = 'キリンチューハイ氷結グレープフルーツ350ml缶');
        $this->assertFalse($product->isReducedTaxRate());
    }
}
