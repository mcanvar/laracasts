<?php

namespace Acme;

/**
 * Auth Class
 */
class AuthController implements RespondsToUserRegistration {
  public function __construct(RegisterUser $registration)
  {
    $this->registration = $registration;
  }

  public function register()
  {
    $this->registration->execute([], $this);
  }

  public function userRegisterSuccesfully()
  {
    var_dump('Created succesfully!');
  }

  public function userRegisterFailed()
  {
    var_dump('Created unsuccesfully!');
  }
}
