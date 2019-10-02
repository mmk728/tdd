<?php

namespace Tests\Models\Local;

use App\Models\Local\ProductType;
use Tests\TestCase;

class ProductTypeTest extends TestCase
{
    /** @test */
    public function 手巻き直火焼き紅しゃけの時タイプはfoodを返す()
    {
        $type = new ProductType($name = '手巻き直火焼き紅しゃけ');
        $this->assertEquals('food', $type->typeName());
    }

    /** @test */
    public function キリン生茶555mlペットボトルの時タイプはdrinkを返す()
    {
        $type = new ProductType($name = 'キリン生茶555mlペットボトル');
        $this->assertEquals('drink', $type->typeName());
    }

    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶の時タイプはliquorを返す()
    {
        $type = new ProductType($name = 'キリンチューハイ氷結グレープフルーツ350ml缶');
        $this->assertEquals('liquor', $type->typeName());
    }

    /** @test */
    public function 新ルルA錠s50錠の時タイプはmedicineを返す()
    {
        $type = new ProductType($name = '新ルルA錠s50錠');
        $this->assertEquals('medicine', $type->typeName());
    }

    /** @test */
    public function リポビタンDの時タイプはquasi_drugを返す()
    {
        $type = new ProductType($name = 'リポビタンD');
        $this->assertEquals('quasi_drug', $type->typeName());
    }
}
