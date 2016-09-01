<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 1.09.2016
 * Time: 03:20
 */

namespace App;


class Brie extends  Item
{
    public function tick()
    {
        if($this->quality < 50)
        {
            $this->quality++;
            if($this->sellIn <= 0 && $this->quality != 50)
                $this->quality++;
        }
        $this->sellIn--;
    }
}