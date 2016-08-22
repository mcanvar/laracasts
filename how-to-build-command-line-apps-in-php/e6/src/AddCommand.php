<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 22.08.2016
 * Time: 02:39
 */

namespace Acme;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class AddCommand extends Command
{
    public function configure(){
        $this->setName('add')
            ->setDescription('Add a new task.')
            ->addArgument('description', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $description = $input->getArgument('description');

        $this->database->query(
            'INSERT INTO TASKS(description) VALUES(:description)',
            compact('description')
            );

        $output->writeln('<info>Task added!</info>');

        $this->showTasks($output);
    }
}