<?php

$hash = password_hash('hashme', PASSWORD_BCRYPT, ['cost' => 10]);

if(password_verify('hashme', $hash))
{
  var_dump('PASSED: ' . $hash);
}
