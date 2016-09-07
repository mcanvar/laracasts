<?php

class BowlingGame
{
    public function roll($pins)
    {
        $this->guardAgainstsInvalidRoll($pins);
        
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        $roll = 0;

        for($frame = 1; $frame <= 10; $frame++)
        {
            if($this->isStrike($roll))
            {
                $score += 10 + $this->strikeBonus($roll);
                $roll++;
                continue;
            }
            elseif($this->isSpare($roll))
            {
                $score += 10 + $this->spareBonus($roll);
            }
            else
            {
                $score += $this->getDefaultFrameScore($roll);
            }
            $roll += 2;
        }

        return $score;
    }

    /**
     * @param $roll
     * @return bool
     */
    private function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    /**
     * @param $roll
     * @return mixed
     */
    private function getDefaultFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    /**
     * @param $roll
     * @return bool
     */
    private function isStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    /**
     * @param $roll
     * @return int
     */
    function strikeBonus($roll)
    {
        return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    /**
     * @param $roll
     * @return mixed
     */
    function spareBonus($roll)
    {
        return $this->rolls[$roll + 2];
    }

    /**
     * @param $pins
     */
    function guardAgainstsInvalidRoll($pins)
    {
        if ($pins < 0) {
            throw new InvalidArgumentException;
        }
    }
}
