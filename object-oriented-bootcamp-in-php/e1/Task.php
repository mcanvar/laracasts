<?php

/**
 * Task class
 */
class Task
{
  public $title;
  public $description;
  public $completed = false;

  function __construct($description, $title)
  {
    $this->description = $description;
    $this->title = $title;
  }

  public function complete()
  {
    $this->completed = TRUE;
  }

}


$task = new Task('Learn OOP', 'Teacher saying vla vla vlaa!');

$task->complete();

var_dump($task);
