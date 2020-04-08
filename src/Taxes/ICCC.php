<?php


namespace App\Taxes;


use App\Estimate;
use App\Tax;

class ICCC implements Tax
{

    public function calculate(Estimate $estimate)
    {
        $value = $estimate->getValue();
        if($value < 1000) {
            return $value * 0.05;
        }

        if ($value >= 1000 || $value <= 3000) {
            return $value * 0.07;
        }

        return $value * 0.08 + 30;
    }
}