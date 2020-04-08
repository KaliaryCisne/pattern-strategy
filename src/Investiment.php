<?php


namespace App;


interface Investiment
{
    public function calculate(Estimate $estimate);
}