<?php

namespace App\Models;

class Liquor implements Product
{
    public function isReducedTaxRate()
    {
        return false;
    }
}
