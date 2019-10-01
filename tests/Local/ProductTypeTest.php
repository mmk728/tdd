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

    /** @test */
    public function キリン生茶555mlペットボトルの時タイプは飲料品を返す()
    {
        $type = new ProductType($name = 'キリン生茶555mlペットボトル');
        $this->assertEquals('飲料品', $type->typeName());
    }

    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶の時タイプは酒類を返す()
    {
        $type = new ProductType($name = 'キリンチューハイ氷結グレープフルーツ350ml缶');
        $this->assertEquals('酒類', $type->typeName());
    }

    /** @test */
    public function 新ルルA錠s50錠の時タイプは医薬品を返す()
    {
        $type = new ProductType($name = '新ルルA錠s50錠');
        $this->assertEquals('医薬品', $type->typeName());
    }

    /** @test */
    public function リポビタンDの時タイプは医薬部外品を返す()
    {
        $type = new ProductType($name = 'リポビタンD');
        $this->assertEquals('医薬部外品', $type->typeName());
    }
}
