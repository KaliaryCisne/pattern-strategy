<?php


namespace App;


class ProfitCalculator
{

    public function performsCalculation(Estimate $estimate, Investiment $investiment)
    {
        $profit = $investiment->calculate($estimate);
        $estimate->setValue($profit * 0.75);
        return $estimate->getValue();
    }
}