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
}
