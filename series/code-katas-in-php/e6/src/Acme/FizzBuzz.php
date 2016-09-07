<?php

namespace Acme;

class FizzBuzz
{
    function fizzBuzz($number)
    {
        $statement = $this->setStatement($number);

        if($number % 3 === 0)
            $statement .= 'fizz';
        if($number % 5 === 0)
            $statement .= 'buzz';

        return $statement;
    }

    function fizzBuzzUpTo($max)
    {
        $statementsArray = [];

        for($i = 1; $i <= $max; $i++)
        {
            $statementsArray[] = $this->fizzBuzz($i);
        }

        return $statementsArray;
    }

    /**
     * @param $number
     * @return string
     */
    function setStatement($number)
    {
        return $this->isDivisibleBy3or5($number) ? '' : $number;
    }

    /**
     * @param $number
     * @return bool
     */
    function isDivisibleBy3or5($number)
    {
        return ($number % 3 === 0) || ($number % 5 === 0);
    }
}
