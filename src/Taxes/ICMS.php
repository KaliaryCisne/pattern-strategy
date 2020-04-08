<?php

namespace App\Taxes;

use App\Estimate;
use App\Tax;

class ICMS implements Tax
{

    public function calculate(Estimate $estimate)
    {
        return $estimate->getValue() * 0.05 + 50;
    }
}