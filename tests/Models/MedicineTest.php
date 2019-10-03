<?php

namespace Tests\Models;

use App\Models\Medicine;
use Tests\TestCase;

class MedicineTest extends TestCase
{
    /** @test */
    public function 新ルルA錠s50錠の税抜き価格は871円である()
    {
        $this->assertEquals(871, (new Medicine($name = '新ルルA錠s50錠'))->no_taxed_price);
    }

    /** @test */
    public function 新ルルA錠s50錠の税抜き価格の合計値を取得できる()
    {
        $medicine = new Medicine($name = '新ルルA錠s50錠');
        $medicine->add();
        $medicine->add();
        $this->assertEquals(1742, $medicine->total_no_taxed_price[$name]);
    }

    /** @test */
    public function 新ルルA錠s50錠の税込み価格の合計値を取得できる()
    {
        $medicine = new Medicine($name = '新ルルA錠s50錠');
        $medicine->add();
        $medicine->add();
        $this->assertEquals(1916, $medicine->totalTaxedPrice());
    }
}
