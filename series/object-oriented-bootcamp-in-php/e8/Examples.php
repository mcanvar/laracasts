<?php

interface Animal {
  public function communicate();
}

/**
 * Implementation
 */
class Dog implements Animal
{
  public function communicate()
  {
    return 'bark';
  }
}

class Cat implements Animal
{
 public function communicate()
 {
   return 'meow';
 }
}

/* ---------------------------------------- */

interface Logger {
  public function execute($message);
}

class LogToFile implements Logger {
  public function execute($message)
  {
    var_dump('Log the message to a file: ' . $message);
  }
}
class LogToDatabase implements Logger {
  public function execute($message)
  {
    var_dump('Log the message to a database: ' . $message);
  }
}
// ...
class UserController {
  protected $logger;

  public function __construct(Logger $logger)
  {
    $this->logger = $logger;
  }

  public function show()
  {
    $user = 'John Doe';

    //logging
    $this->logger->execute($user);
  }
}

$controller = new UserController(new LogToDatabase());
$controller->show();


/* ---------------------------------------- */

interface CastsToJson {
  public function toJson();
}


/* ---------------------------------------- */

interface CanBeFiltered {
  public function filter();
}

class Favorited implements CanBeFiltered {
  public function filter()
  {

  }
}

class Unwatched implements CanBeFiltered {
  public function filter()
  {

  }
}

class Difficulty implements CanBeFiltered {
  public function filter()
  {

  }
}
