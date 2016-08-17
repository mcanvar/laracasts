<?php

/**
 * Statics and comment_{$old_status}_to_{$new_status}
 */
class Math
{

  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

/**
 * Static now always the right choice!
 */
class Person
{
  public static $age = 1;

  public function haveBirtday()
  {
    static::$age += 1;
  }
}

$joe = new Person();
$joe->haveBirtday();
$joe->haveBirtday();

$jane = new Person();
$jane->haveBirtday();

//echo Person::$age;


/**
 * constants
 */
class BankAccount
{
  const TAX = .09;
}

echo BankAccount::TAX;
