<?php

use App\Events\UserSignedUp;
use App\Listeners\SendThankYouEmail;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;

require 'vendor/autoload.php';

$dispatcher = new EventDispatcher;
$event = new UserSignedUp((object) ['name' => 'Joe', 'email' => 'abc@d.com']);
$listener = new SendThankYouEmail($event);

// $dispatcher->addListener(UserSignedUp::class, function(Event $event){
//   var_dump($event->user);
// });

$dispatcher->addListener(UserSignedUp::class, [$listener, 'handle']);

$dispatcher->dispatch(UserSignedUp::class, $event);
