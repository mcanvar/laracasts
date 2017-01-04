<?php
/**
 * Created by PhpStorm.
 * User: mevlu
 * Date: 4.01.2017
 * Time: 19:02
 */

namespace App\Transformers;


class LessonTransformer extends Transformer
{
    public  function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (boolean)$lesson['status']
        ];
    }
}