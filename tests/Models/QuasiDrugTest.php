<?php

namespace Tests\Models;

use App\Models\QuasiDrug;
use Tests\TestCase;

class QuasiDrugTest extends TestCase
{
    /** @test */
    public function リポビタンDの税抜き価格は146円である()
    {
        $this->assertEquals(146, (new QuasiDrug($name = 'リポビタンD'))->no_taxed_price);
    }

    /** @test */
    public function リポビタンDの税抜き価格の合計値を取得できる()
    {
        $quasi_drug = new QuasiDrug($name = 'リポビタンD');
        $quasi_drug->add();
        $quasi_drug->add();
        $quasi_drug->add();
        $quasi_drug->add();
        $quasi_drug->add();
        $this->assertEquals(730, $quasi_drug->total_no_taxed_price[$name]);
    }
}
