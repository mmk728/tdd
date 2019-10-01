<?php

namespace Tests\Local;

use App\Local\ProductType;
use Tests\TestCase;

class ProductTypeTest extends TestCase
{
    /** @test */
    public function 手巻き直火焼き紅しゃけの時タイプは食料品を返す()
    {
        $type = new ProductType($name = '手巻き直火焼き紅しゃけ');
        $this->assertEquals('食料品', $type->typeName());
    }
}
