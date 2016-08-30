<?php namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior
{
    function it_scores_a_gutter_game_as_0()
    {
        $this->rollTimes(20, 0);

        $this->score()->shouldBe(0);
    }

    function it_scores_the_sum_of_all_knocked_down_pins_for_a_game()
    {
        $this->rollTimes(20, 1);

        $this->score()->shouldBe(20);
    }

    function it_awards_one_roll_bonus_for_every_spare()
    {
        $this->rollSpare();
        $this->roll(5);
        $this->rollTimes(17, 0);

        $this->score()->shouldBe(20);
    }

    function it_awards_two_roll_bonus_for_every_strike_in_the_previous_frame()
    {
        $this->roll(10);
        $this->roll(7);
        $this->roll(2);
        $this->rollTimes(17, 0);

        $this->score()->shouldBe(28);
    }

    function it_scores_a_perfect_game()
    {
        $this->rollTimes(12, 10);

        $this->score()->shouldBe(300);
    }

    function it_takes_an_exception_with_invalid_rolls()
    {
        $this->shouldThrow('InvalidArgumentException')->duringRoll(-10);
    }

    private function rollSpare()
    {
        $firstRoll = rand(1, 9);
        $secondRoll = 10 - $firstRoll;

        $this->roll($firstRoll);
        $this->roll($secondRoll);
    }

    private function rollTimes($total, $pins)
    {
        for ($i = 0; $i < $total; $i++) {
            $this->roll($pins);
        }
    }
}
