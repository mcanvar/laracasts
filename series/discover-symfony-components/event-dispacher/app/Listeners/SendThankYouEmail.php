<?php

namespace App\Listeners;

class SendThankYouEmail
{
  public $event;

  public function __construct($event)
  {
    $this->event = $event;
  }

  function handle()
  {
    var_dump($this->event);
  }
}
