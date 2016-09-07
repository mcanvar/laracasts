<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 20.08.2016
 * Time: 22:41
 */

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

require 'vendor\autoload.php';

$app = new Application('Laracasts HelloWorld Demo', '1.0');

$app->register('sayHelloTo')
    ->setDescription('Offer a greeting to the given person.')
    ->addArgument('name', InputArgument::OPTIONAL, 'Your name.')
    ->setCode(function(InputInterface $input, OutputInterface $output){
        $message = 'Hello, ' . $input->getArgument('name');
        $output->writeln("<info>{$message}</info>");
    });

$app->run();