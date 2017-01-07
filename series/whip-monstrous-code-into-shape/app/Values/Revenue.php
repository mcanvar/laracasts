<?php

namespace App\Values;

class Revenue
{
    private $revenue;
    public function __construct($revenue)
    {
        $this->revenue = $revenue;
    }
    public function inDollars()
    {
        return $this->revenue / 100; // 86
    }
    public function asCurrency()
    {
        return money_format('$%i', $this->inDollars()); // $86.00
    }
    public function __toString()
    {
        return (string) $this->AsCurrency();
    }
}