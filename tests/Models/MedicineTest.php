<?php

namespace Tests\Models;

use App\Models\Medicine;
use Tests\TestCase;

class MedicineTest extends TestCase
{
    /** @test */
    public function 新ルルA錠s50錠の税抜き価格は871円である()
    {
        $this->assertEquals(871, (new Medicine())->no_taxed_price);
    }
}
