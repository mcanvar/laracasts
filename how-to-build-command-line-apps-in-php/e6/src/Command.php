<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 22.08.2016
 * Time: 02:41
 */

namespace Acme;

use Symfony\Component\Console\Command as SymfonyCommand;
use Symfony\Component\Console\Helper\Table;

class Command extends SymfonyCommand\Command
{
    /**
     * @var DatabaseAdapter
     */
    protected $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;

        parent::__construct();
    }

    protected function showTasks($output)
    {
        if (!$tasks = $this->database->fetchAll('tasks')) {
            return $output->writeln('<info>No entry!</info>');
        }

        $table = new Table($output);
        $table->setHeaders(['Id', 'Description'])
            ->setRows($tasks)
            ->render();
    }
}