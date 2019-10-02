<?php

namespace App\Models;

class Drink implements Product
{
    public function isReducedTaxRate()
    {
        return true;
    }
}
