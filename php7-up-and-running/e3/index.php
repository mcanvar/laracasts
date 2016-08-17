<?php

class User {}

interface UserInterface {
  public function getUser() : User;
}

class AuthorizedUser implements UserInterface {
  public function getUser() : User {
    return new User();
  }
}

var_dump((new AuthorizedUser)->getUser());
