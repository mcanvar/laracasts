<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 1.09.2016
 * Time: 03:23
 */

namespace App;


abstract class Item
{
    public $sellIn;
    public $quality;

    /**
     * Item constructor.
     * @param $quality
     * @param $sellIn
     */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    abstract public function tick();
}