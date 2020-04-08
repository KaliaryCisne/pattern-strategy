<?php


namespace App;


class Estimate
{
    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value += $value;
    }
}