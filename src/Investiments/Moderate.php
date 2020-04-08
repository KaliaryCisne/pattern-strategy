<?php


namespace App\Investiments;


use App\Estimate;
use App\Investiment;

class Moderate implements Investiment
{

    public function calculate(Estimate $estimate)
    {
        $number_drawn = rand(1, 101);
        if ($number_drawn <=50) {
            return $estimate->getValue() * 2.5;
        }
        return $estimate->getValue() * 0.7;
    }
}