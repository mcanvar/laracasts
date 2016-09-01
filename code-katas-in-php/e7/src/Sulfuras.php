<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 1.09.2016
 * Time: 03:20
 */

namespace App;


class Sulfuras extends Item
{

    const quality = 80;

    /**
     * Sulfuras constructor.
     * @param $quality
     * @param $sellIn
     */
    public function __construct($quality, $sellIn)
    {
        parent::__construct(self::quality, $sellIn);
    }
    public function tick() {}
}