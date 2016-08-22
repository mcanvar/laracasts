<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 20.08.2016
 * Time: 22:41
 */
use Acme\SayHello;
use Symfony\Component\Console\Application;

require 'vendor\autoload.php';

$app = new Application('Laracasts HelloWorld Demo', '1.0');

$app->add(new SayHello());

$app->run();