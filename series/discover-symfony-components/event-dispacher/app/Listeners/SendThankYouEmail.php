<?php

namespace App\Listeners;

use App\Events\UserSignedUp;

class SendThankYouEmail
{
  function handle(UserSignedUp $event)
  {
    var_dump($event);
  }
}
