<?php


namespace App;


interface Tax
{
    public function calculate(Estimate $estimate);
}