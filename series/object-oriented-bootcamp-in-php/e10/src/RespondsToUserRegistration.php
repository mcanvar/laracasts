<?php

namespace Acme;

interface RespondsToUserRegistration {
  public function userRegisterSuccesfully();
  public function userRegisterFailed();
}
