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

    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶の税抜き価格の合計値を取得できる()
    {
        $liquor = new Liquor($name = 'キリンチューハイ氷結グレープフルーツ350ml缶');
        $liquor->add();
        $this->assertEquals(141, $liquor->total_no_taxed_price[$name]);
    }
}
