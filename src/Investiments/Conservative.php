<?php


namespace App\Investiments;


use App\Estimate;
use App\Investiment;

class Conservative implements Investiment
{

    public function calculate(Estimate $estimate)
    {
        return $estimate->getValue() * 0.8;
    }
}