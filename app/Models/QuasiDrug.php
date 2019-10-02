<?php

namespace App\Models;

class QuasiDrug implements Product
{
    public function isReducedTaxRate()
    {
        return false;
    }
}
