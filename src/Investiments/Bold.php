<?php


namespace App\Investiments;


use App\Estimate;
use App\Investiment;

class Bold implements Investiment
{

    public function calculate(Estimate $estimate)
    {
        $number_drawn = rand(1, 100);

        if  ($number_drawn <= 20) {
            return $estimate->getValue() * 0.05;
        }

        if ($number_drawn > 20 && $number_drawn <= 50) {
            return $estimate->getValue() * 0.03;
        }

        return $estimate->getValue() * 0.006;
    }
}