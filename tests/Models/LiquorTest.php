<?php

namespace Tests\Models;

use App\Models\Liquor;
use Tests\TestCase;

class LiquorTest extends TestCase
{
    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶の税抜き価格は141円である()
    {
        $this->assertEquals(141, (new Liquor($name = 'キリンチューハイ氷結グレープフルーツ350ml缶'))->no_taxed_price);
    }

    /** @test */
    public function ストロングゼロ〈ダブルグレープフルーツ〉350ml缶の税抜き価格は141円である()
    {
        $this->assertEquals(141, (new Liquor($name = 'ストロングゼロ〈ダブルグレープフルーツ〉350ml缶'))->no_taxed_price);
    }
}
