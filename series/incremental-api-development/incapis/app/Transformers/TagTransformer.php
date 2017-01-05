<?php
/**
 * Created by PhpStorm.
 * User: mevlu
 * Date: 4.01.2017
 * Time: 19:02
 */

namespace App\Transformers;


class TagTransformer extends Transformer
{
    public  function transform($lesson)
    {
        return [
            'name' => $lesson['name']
        ];
    }
}