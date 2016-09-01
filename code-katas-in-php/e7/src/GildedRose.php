<?php

namespace App;

class GildedRose
{
    public static function of($name, $quality, $sellIn) {
        $lookup = [
            'normal' => Normal::class,
            'Aged Brie' => Brie::class,
            'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
            'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class,
            'Conjured Mana Cake' => Conjured::class
        ];
        return new $lookup[$name]($quality, $sellIn);
    }
}
