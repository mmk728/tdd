<?php

namespace Tests\Factories;

use App\Factories\ProductFactory;
use App\Models\Drink;
use App\Models\Food;
use App\Models\Liquor;
use Tests\TestCase;

class ProductFactoryTest extends TestCase
{
    /** @test */
    public function foodを渡すとFoodモデルが返ってくる()
    {
        $model = ProductFactory::create($type = 'food');
        $this->assertInstanceOf(Food::class, $model);
    }

    /** @test */
    public function drinkを渡すとDrinkモデルが返ってくる()
    {
        $model = ProductFactory::create($type = 'drink');
        $this->assertInstanceOf(Drink::class, $model);
    }

    /** @test */
    public function liquorを渡すとLiquorモデルが返ってくる()
    {
        $model = ProductFactory::create($type = 'liquor');
        $this->assertInstanceOf(Liquor::class, $model);
    }
}
