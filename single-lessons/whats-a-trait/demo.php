<?php

trait OwnerTrait {
  public function owner()
  {
    return 'fetched the owner';
  }
}

class Thread {
  use OwnerTrait;
}

class Comment {
  use OwnerTrait;
}

var_dump((new Thread)->owner());
