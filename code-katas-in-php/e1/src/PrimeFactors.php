<?php

class PrimeFactors
{
public function generate($number)
{
    $primes = [];
    $candidate = 2;

    while($candidate <= $number)
    {
        if($number % $candidate === 0){
            $primes[] = $candidate;
            $number = $number / $candidate;
            continue;
        }
        $candidate++;
    }

    return $primes;
}
}
