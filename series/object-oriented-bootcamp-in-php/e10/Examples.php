<?php
/**
 * Review
 */

require 'vendor/autoload.php';

use Acme\RegisterUser;
use Acme\AuthController;

$registration = new RegisterUser();
$authController = new AuthController($registration);

$authController->register();
