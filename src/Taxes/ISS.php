<?php


namespace App\Taxes;


use App\Estimate;
use App\Tax;

class ISS implements Tax
{

    public function calculate(Estimate $estimate)
    {
        return $estimate->getValue() * 0.06;
    }
}