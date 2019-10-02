<?php

namespace App\Models;

class Medicine implements Product
{   
    public function isReducedTaxRate()
    {
        return false;
    }
}
