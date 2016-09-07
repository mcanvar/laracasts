<?php

/**
 * Person Class
 */
class Person
{
  public $name;
  public $age;

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
$john->setAge(33);

var_dump($john->getAge());
