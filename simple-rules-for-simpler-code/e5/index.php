<?php

/*
WRAP PRIMITIVES
1. Does bring clarity?
2. Is there behavior?
3. Consistency
4. Does is important for your domain concept?
*/

class Weight {
  protected $weight;

  public function _construct($weight)
  {
    $this->weightt = $weight;
  }

  public function gain($pounds)
  {
    return new static($this->weight + $pounds);
  }

  public function lose($pounds)
  {
    return new static($this->weight - $pounds);
  }
}

class WorkoutPlaceMember {
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function workoutFor(TimeLength $length)
  {
    $length->inHours();
  }
}

class TimeLength {
  protected $seconds;

  public function __construct($seconds)
  {
    $this->seconds = $seconds;
  }

  public static function fromMinutes($minutes)
  {
    return new static($minutes * 60);
  }

  public static function fromHours($hours)
  {
    return new static($hours * 60 * 60);
  }

  public function getSeconds()
  {
      return $this->seconds;
  }

  public function inMinutes()
  {
      return $this->seconds / 60;
  }

  public function inHours()
  {
      return $this->seconds / 60 / 60;
  }

}

$member = new WorkoutPlaceMember('John', new Weight(52));
$member->workoutFor(TimeLength::fromMinutes(45));
