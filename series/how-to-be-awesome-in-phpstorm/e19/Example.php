<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 2.09.2016
 * Time: 06:00
 */

function isDrivingAge($age)
{
    return $age >= 16;
}

function notifyUserOfDriverStatus($name, $age)
{
    $message = isDrivingAge($age) ? 'You may drive.' : 'You can not drive.';

    return "{$name}: {$message}";
}

$status = notifyUserOfDriverStatus('John', 17);