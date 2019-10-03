<?php

namespace Tests\Models;

use App\Models\Food;
use Tests\TestCase;

class FoodTest extends TestCase
{
    /** @test */
    public function 手巻直火焼き紅しゃけの税抜き価格は139円である()
    {
        $this->assertEquals(139, (new Food($name = '手巻き直火焼き紅しゃけ'))->no_taxed_price);
    }

    /** @test */
    public function 大きなおむすびマヨネーズの税抜き価格は186円である()
    {
        $this->assertEquals(186, (new Food($name = '大きなおむすびマヨネーズ'))->no_taxed_price);
    }

    /** @test */
    public function からあげ棒の税抜き価格は114円である()
    {
        $this->assertEquals(114, (new Food($name = 'からあげ棒'))->no_taxed_price);
    }

    /** @test */
    public function 設定されていないキーにアクセスしようとするとエラーになる()
    {
        $this->expectException('\UnexpectedValueException');
        (new Food($name = '手巻き直火焼き紅しゃけ'))->hoge;
    }

    /** @test */
    public function からあげ棒の税抜き価格の合計値が取得できる()
    {
        $food = new Food($name = 'からあげ棒');
        $food->add();
        $food->add();
        $food->add();
        $this->assertEquals(342, $food->total_no_taxed_price[$name]);
    }

    /** @test */
    public function からあげ棒の税込み価格の合計値が取得できる()
    {
        $food = new Food($name = 'からあげ棒');
        $food->add();
        $food->add();
        $food->add();
        $this->assertEquals(369, $food->totalTaxedPrice());
    }
}
