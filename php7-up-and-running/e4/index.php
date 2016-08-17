<?php

//spaceship oprator: <=> (-1 0 1)

// var_dump(10 <=> 343);

$games = ['Super Maria Bros', 'Mass Effect', 'Zeida', 'Fallout', 'Metal Gear'];

//sort($games);
//var_dump($games);


//rsort($games);
//var_dump($games);

//
// usort($games, function($a, $b){
//   var_dump('a: ' . $a . ', b: ' . $b);
//   return $a <=> $b;
// });
//
// var_dump($games);



usort($games, function($a, $b){
  return strlen($a) <=> strlen($b);
});

// var_dump($games);


class User {
  protected $name;
  protected $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }
}

class UserCollection {
  protected $users ;

  public function __construct(array $users)
  {
    $this->users = $users;
  }

  public function getUsers()
  {
    return $this->users;
  }

  public function sortBy($method)
  {
    usort($this->users, function($userOne, $userTwo) use ($method)
    {
      return $userOne->$method() <=> $userTwo->$method();
    });
  }
}

$collection = new UserCollection([
  new User('Nuran', 52),
  new User('Mevlut', 26),
  new User('Ahmet', 52),
  new User('Esra', 22)
]);

$collection->sortBy('getAge');

var_dump($collection->getUsers());
