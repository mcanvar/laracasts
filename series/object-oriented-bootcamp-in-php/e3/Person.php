<?php

/**
 * Person Class
 */
class Person
{
  private $name;
  private $age;

  function __construct($name)
  {
    $this->name = $name;
  }

  public function getAge()
  {
    return $this->age * 365;
  }

  public function setAge($age)
  {
    if ($age < 18)
      throw new Exception('Person is not old enough.', 1);
    $this->age = $age;
  }
}

$john = new Person('John Doe');
$john->setAge(30);

var_dump($john->getAge());
