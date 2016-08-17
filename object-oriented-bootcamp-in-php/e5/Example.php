<?php

/**
 *  Messaging
 */
class Person
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Business
{
  protected $staff;

  public function __construct($staff)
  {
    $this->staff = $staff;
  }

  public function hire(Person $person)
  {
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->getMembers();
  }
}

class Staff
{
 protected $members = [];

 public function __construct($members = [])
 {
   $this->members = $members;
 }

 public function add(Person $person)
 {
   $this->members[] = $person;
 }

 public function getMembers()
 {
   return $this->members;
 }
}

$mevlut = new Person('Mevlut Canvar');
$staff = new Staff([$mevlut]);
$laracasts = new Business($staff);

$laracasts->hire(new Person('Esra Canvar'));

var_dump($laracasts->getStaffMembers());
