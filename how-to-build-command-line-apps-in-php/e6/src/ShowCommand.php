<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 21.08.2016
 * Time: 02:00
 */

namespace Acme;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowCommand extends Command
{
    public function configure(){
        $this->setName('show')
            ->setDescription('Show all data.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->showTasks($output);
    }
}