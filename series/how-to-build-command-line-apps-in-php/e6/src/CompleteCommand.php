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

class CompleteCommand extends Command
{
    public function configure(){
        $this->setName('complete')
            ->setDescription('Complete a task by its id.')
            ->addArgument('id', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');

        $this->database->query(
            'DELETE FROM  TASKS WHERE id = :id',
            compact('id')
            );

        $output->writeln('<info>Task completed!</info>');

        $this->showTasks($output);
    }
}