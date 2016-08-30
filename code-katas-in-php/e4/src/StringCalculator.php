<?php

class StringCalculator
{
    const MAX_ALLOWED_NUMBER = 1000;

    public function add ($string)
    {
        $numbers = $this->parseNumbers($string);
        $sum = 0;

        foreach ($numbers as $number)
        {
            $this->guardAgainstInvalidNumber($number);
            if($number >= self::MAX_ALLOWED_NUMBER) continue;
            $sum += (int) $number;
        }

        return $sum;
    }

    /**
     * @param $number
     */
    function guardAgainstInvalidNumber($number)
    {
        if ($number < 0) throw new InvalidArgumentException('Invalid number provided: ' . $number);
    }

    /**
     * @param $string
     * @return array
     */
    function parseNumbers($string)
    {
        return array_map('intval', preg_split('/\s*,|\\\n\s*/', $string));
    }
}
