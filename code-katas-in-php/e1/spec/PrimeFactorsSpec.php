<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_returns_an_empty_array_for_1()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_returns_2_for_2()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_returns_3_for_3()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_returns_2_2_for_4()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_returns_2_2_3_5_5_for_300()
    {
        $this->generate(300)->shouldReturn([2, 2, 3, 5, 5]);
    }

    function it_returns_17_for_17()
    {
        $this->generate(17)->shouldReturn([17]);
    }

    function it_returns_3_3_for_9()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    function it_returns_2_2_2_2_for_16()
    {
        $this->generate(16)->shouldReturn([2, 2, 2, 2]);
    }
}
