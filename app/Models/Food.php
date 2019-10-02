<?php

namespace App\Models;

class Food implements Product
{
    public function isReducedTaxRate()
    {
        return true;
    }
}
