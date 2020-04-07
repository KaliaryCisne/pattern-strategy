<?php


namespace App;


class TaxCalculator
{
    /**
     * @param Estimate $estimate
     * @param Tax $tax
     */
    public function performsCalculation(Estimate $estimate, Tax $tax)
    {
        return $tax->calculate($estimate);
    }
}