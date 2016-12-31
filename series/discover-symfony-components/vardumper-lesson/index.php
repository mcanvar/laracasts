<?php

require 'vendor/autoload.php';

/**
 * Tasks
 */
class Tasks
{
  protected $tasks;

  function __construct($tasks)
  {
    $this->tasks = $tasks;
  }

}


/**
 * Task
 */
class Task
{
  protected $description;

  function __construct($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }
}

$tasks = new Tasks([
  new Task('Finish the translate.'),
  new Task('Search for a job.')
]);

dump($tasks);
