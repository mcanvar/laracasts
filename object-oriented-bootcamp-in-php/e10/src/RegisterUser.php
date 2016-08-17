<?php

namespace Acme;

/**
 * RegisterUser Class
 */
class RegisterUser
{

  public function execute(array $data, RespondsToUserRegistration $listener)
  {
    var_dump('Registering the user.');

    $listener->userRegisterSuccesfully();
  }
}
