<?php

namespace Tests;

use App\Caluclator;
use App\Models\Drink;
use App\Models\Food;
use App\Models\Liquor;
use App\Models\Medicine;

class CaluclatorTest extends TestCase
{
    /** @test */
    public function 手巻直火焼き紅しゃけ2個とキリンチューハイ氷結グレープフルーツ350ml缶3本を渡すと765が返ってくる()
    {
        $products = [
            new Food($name = '手巻き直火焼き紅しゃけ'),
            new Food($name = '手巻き直火焼き紅しゃけ'),
            new Liquor($name = 'キリンチューハイ氷結グレープフルーツ350ml缶'),
            new Liquor($name = 'キリンチューハイ氷結グレープフルーツ350ml缶'),
            new Liquor($name = 'キリンチューハイ氷結グレープフルーツ350ml缶'),
        ];
        $this->assertEquals(765, (new Caluclator($products))->total());
    }

    /** @test */
    public function 大きなおむすびマヨネーズ3個とキリン生茶555mlペットボトル4本と新ルルＡ錠s50錠1個を渡すと2164が返ってくる()
    {
        $products = [
            new Food($name = '大きなおむすびマヨネーズ'),
            new Food($name = '大きなおむすびマヨネーズ'),
            new Food($name = '大きなおむすびマヨネーズ'),
            new Drink($name = 'キリン生茶555mlペットボトル'),
            new Drink($name = 'キリン生茶555mlペットボトル'),
            new Drink($name = 'キリン生茶555mlペットボトル'),
            new Drink($name = 'キリン生茶555mlペットボトル'),
            new Medicine($name = '新ルルA錠s50錠')
        ];
        $this->assertEquals(2164, (new Caluclator($products))->total());
    }
}
