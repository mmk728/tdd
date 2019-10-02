<?php

namespace Tests\Models;

use App\Models\Drink;
use Tests\TestCase;

class DrinkTest extends TestCase
{
    /** @test */
    public function キリン生茶555mlペットボトルの税抜き価格は140円である()
    {
        $this->assertEquals(140, (new Drink($name = 'キリン生茶555mlペットボトル'))->no_taxed_price);
    }

    /** @test */
    public function オロナミンCの税抜き価格は105円である()
    {
        $this->assertEquals(105, (new Drink($name = 'オロナミンC'))->no_taxed_price);
    }

    /** @test */
    public function 指定していないキーにアクセスしようとするとエラーになる()
    {
        $this->expectException('\UnexpectedValueException');
        (new Drink($name = 'オロナミンC'))->hoge;
    }
}
