<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 1.09.2016
 * Time: 03:09
 */

namespace App;


class Conjured extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if($this->quality == 0)
            return;

        $this->quality -= 2;

        if ($this->sellIn < 0)
        {
            $this->quality -= 2;
        }
    }
}