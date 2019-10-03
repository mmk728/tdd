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
        $food = new Food($name = '手巻き直火焼き紅しゃけ');
        $food->add();
        $food->add();
        $liquor = new Liquor($name = 'キリンチューハイ氷結グレープフルーツ350ml缶');
        $liquor->add();
        $liquor->add();
        $liquor->add();

        $this->assertEquals(765, (new Caluclator($products = [$food, $liquor]))->total());
    }

    /** @test */
    public function 大きなおむすびマヨネーズ3個とキリン生茶555mlペットボトル4本と新ルルＡ錠s50錠1個を渡すと2164が返ってくる()
    {
        $food = new Food($name = '大きなおむすびマヨネーズ');
        $food->add();
        $food->add();
        $food->add();
        $drink = new Drink($name = 'キリン生茶555mlペットボトル');
        $drink->add();
        $drink->add();
        $drink->add();
        $drink->add();
        $medicine = new Medicine($name = '新ルルA錠s50錠');
        $medicine->add();

        $this->assertEquals(2164, (new Caluclator($products = [$food, $drink, $medicine]))->total());
    }
}
