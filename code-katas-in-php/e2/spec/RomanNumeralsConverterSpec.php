<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior
{
    public function it_returns_I_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    public function it_returns_II_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    public function it_returns_III_for_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    public function it_returns_IV_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    public function it_returns_V_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    public function it_returns_VI_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }

    public function it_returns_VII_for_7()
    {
        $this->convert(7)->shouldReturn('VII');
    }

    public function it_returns_VIII_for_8()
    {
        $this->convert(8)->shouldReturn('VIII');
    }

    public function it_returns_IX_for_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }

    public function it_returns_X_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

    public function it_returns_XI_for_11()
    {
        $this->convert(11)->shouldReturn('XI');
    }

    public function it_returns_XII_for_12()
    {
        $this->convert(12)->shouldReturn('XII');
    }

    public function it_returns_XIII_for_13()
    {
        $this->convert(13)->shouldReturn('XIII');
    }

    public function it_returns_XIV_for_14()
    {
        $this->convert(14)->shouldReturn('XIV');
    }

    public function it_returns_XV_for_15()
    {
        $this->convert(15)->shouldReturn('XV');
    }

    public function it_returns_XVI_for_16()
    {
        $this->convert(16)->shouldReturn('XVI');
    }

    public function it_returns_XVII_for_17()
    {
        $this->convert(17)->shouldReturn('XVII');
    }

    public function it_returns_XVIII_for_18()
    {
        $this->convert(18)->shouldReturn('XVIII');
    }

    public function it_returns_XIX_for_19()
    {
        $this->convert(19)->shouldReturn('XIX');
    }

    public function it_returns_XX_for_20()
    {
        $this->convert(20)->shouldReturn('XX');
    }

    public function it_returns_XXX_for_30()
    {
        $this->convert(30)->shouldReturn('XXX');
    }

    public function it_returns_XL_for_40()
    {
        $this->convert(40)->shouldReturn('XL');
    }

    public function it_returns_L_for_50()
    {
        $this->convert(50)->shouldReturn('L');
    }

    public function it_returns_C_for_100()
    {
        $this->convert(100)->shouldReturn('C');
    }

    public function it_returns_D_for_500()
    {
        $this->convert(500)->shouldReturn('D');
    }

    public function it_returns_CM_for_900()
    {
        $this->convert(900)->shouldReturn('CM');
    }

    public function it_returns_M_for_1000()
    {
        $this->convert(1000)->shouldReturn('M');
    }

    public function it_returns_MCMXCIX_for_1999()
    {
        $this->convert(1999)->shouldReturn('MCMXCIX');
    }

    public function it_returns_MMMMCMXC_for_4990()
    {
        $this->convert(4990)->shouldReturn('MMMMCMXC');
    }
}
