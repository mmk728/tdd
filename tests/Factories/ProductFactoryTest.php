<?php

namespace Tests\Factories;

use App\Factories\ProductFactory;
use App\Models\Drink;
use App\Models\Food;
use App\Models\Liquor;
use App\Models\Medicine;
use App\Models\QuasiDrug;
use Tests\TestCase;

class ProductFactoryTest extends TestCase
{
    /** @test */
    public function オロナミンCを渡すとDrinkモデルが返ってくる()
    {
        $model = ProductFactory::create($name = 'オロナミンC');
        $this->assertInstanceOf(Drink::class, $model);
    }

    /** @test */
    public function キリンチューハイ氷結グレープフルーツ350ml缶を渡すとLiquorモデルが返ってくる()
    {
        $model = ProductFactory::create($name = 'キリンチューハイ氷結グレープフルーツ350ml缶');
        $this->assertInstanceOf(Liquor::class, $model);
    }

    /** @test */
    public function 新ルルA錠s50錠を渡すとMedicineモデルが返ってくる()
    {
        $model = ProductFactory::create($type = '新ルルA錠s50錠');
        $this->assertInstanceOf(Medicine::class, $model);
    }

    /** @test */
    public function リポビタンDを渡すとQuasiDrugモデルが返って来る()
    {
        $model = ProductFactory::create($name = 'リポビタンD');
        $this->assertInstanceOf(QuasiDrug::class, $model);
    }

    /** @test */
    public function 手巻き直火焼き紅しゃけを渡すとFoodモデルが返ってくる()
    {
        $model = ProductFactory::create($name = '手巻き直火焼き紅しゃけ');
        $this->assertInstanceOf(Food::class, $model);
    }
}
