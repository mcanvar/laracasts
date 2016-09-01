<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 1.09.2016
 * Time: 03:21
 */

namespace App;


class BackstagePass extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if($this->quality >= 50)
            return;
        if($this->sellIn < 0)
            return $this->quality = 0;

        $this->quality++;

        if($this->sellIn < 10 && $this->quality < 50)
            $this->quality++;
        if($this->sellIn < 5 && $this->quality < 50)
            $this->quality++;
    }
}