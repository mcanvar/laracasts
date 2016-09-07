<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use InvalidArgumentException;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_convert_empty_string_into_zero()
    {
        $this->add('')->shouldEqual(0);
    }

    function it_convert_the_sum_of_one_number()
    {
        $randomNumber = $this->randomOneDigit();
        $stringNumber = $this->convertToString($randomNumber);

        $this->add($stringNumber)->shouldEqual($randomNumber);
    }

    function it_finds_the_sum_of_two_numbers()
    {
        $numberOne = $this->randomAcceptable();
        $numberTwo = $this->randomAcceptable();

        $numbersString = '';
        $numbersString .= $numberOne;
        $numbersString .= ',';
        $numbersString .= $numberTwo;

        $this->add($numbersString)->shouldEqual($numberOne + $numberTwo);
    }

    function it_founds_the_sum_of_any_amount_of_numbers()
    {
        $numbersString = '';
        $sum = 0;
        for($i = 0; $i < rand(); $i++)
        {
            $randomNumber = $this->randomAcceptable();
            $sum += $randomNumber;
            $numbersString .= $randomNumber . ',';
        }

        $this->add($numbersString)->shouldEqual($sum);
    }

    function it_disallows_negative_numbers()
    {
        $this->shouldThrow(new InvalidArgumentException('Invalid number provided: -3'))->duringAdd('-3,67');
    }

    function it_ignores_any_numbers_that_one_thousand_or_greater()
    {
        $this->add('3,1002,2,55')->shouldEqual(60);
    }

    function it_allows_for_new_line_deliminers()
    {
        $this->add('3,45,10\n2,55')->shouldEqual(115);
    }

    /**
     * @return int
     */
    function randomOneDigit()
    {
        return rand(0, 9);
    }

    /**
     * @param $randomNumber
     * @return string
     */
    function convertToString($randomNumber)
    {
        return strval($randomNumber);
    }

    /**
     * @return int
     */
    function randomAcceptable()
    {
        return rand(0, 999);
    }
}
