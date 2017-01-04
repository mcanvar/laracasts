<?php
/**
 * Created by PhpStorm.
 * User: mevlu
 * Date: 4.01.2017
 * Time: 19:02
 */

namespace App\Transformers;


abstract class Transformer
{
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}