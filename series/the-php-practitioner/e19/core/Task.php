<?php
/**
 * Task Class for todos
 */
class Task
{
  protected $description;
  protected $completed = false;

  public function getDescription()
  {
    return $this->description;
  }

  public function complete()
  {
    $this->completed = true;
  }

  public function isCompleted()
  {
    return $this->completed;
  }

}
