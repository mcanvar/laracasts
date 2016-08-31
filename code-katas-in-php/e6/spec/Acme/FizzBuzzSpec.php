<?php

namespace spec\Acme;

use Acme\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_translates_1_for_fizzbuzz()
    {
        $this->fizzBuzz(1)->shouldReturn(1);
    }

    function it_translates_2_for_fizzbuzz()
    {
        $this->fizzBuzz(2)->shouldReturn(2);
    }

    function it_translates_3_for_fizzbuzz()
    {
        $this->fizzBuzz(3)->shouldReturn('fizz');
    }

    function it_translates_5_for_fizzbuzz()
    {
        $this->fizzBuzz(5)->shouldReturn('buzz');
    }

    function it_translates_6_for_fizzbuzz()
    {
        $this->fizzBuzz(6)->shouldReturn('fizz');
    }

    function it_translates_7_for_fizzbuzz()
    {
        $this->fizzBuzz(7)->shouldReturn(7);
    }

    function it_translates_10_for_fizzbuzz()
    {
        $this->fizzBuzz(10)->shouldReturn('buzz');
    }

    function it_translates_15_for_fizzbuzz()
    {
        $this->fizzBuzz(15)->shouldReturn('fizzbuzz');
    }

    function it_translates_random_number_for_fizzbuzz()
    {
        $randomNumber = $this->getRandomNumber();

        if($randomNumber % 15 === 0)
            $this->fizzBuzz($randomNumber)->shouldReturn('fizzbuzz');
        elseif($randomNumber % 3 === 0)
            $this->fizzBuzz($randomNumber)->shouldReturn('fizz');
        elseif($randomNumber % 5 === 0)
            $this->fizzBuzz($randomNumber)->shouldReturn('buzz');
    }

    function it_translates_a_squence_of_5_numbers_for_fizzbuzz()
    {
        $this->fizzBuzzUpTo(5)->shouldReturn([1, 2, 'fizz', 4, 'buzz']);
    }

    function it_translates_a_squence_of_numbers_for_fizzbuzz()
    {
        $this->fizzBuzzUpTo(15)->shouldReturn([
            1,
            2,
            'fizz',
            4,
            'buzz',
            'fizz',
            7,
            8,
            'fizz',
            'buzz',
            11,
            'fizz',
            13,
            14,
            'fizzbuzz'
        ]);
    }

    /**
     * @return int
     */
    function getRandomNumber()
    {
        return rand(1, getrandmax());
    }
}
