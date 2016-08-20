<?php

//DO NOT
class UserController {
  protected $userService;
  protected $registrationService;
  protected $userRepository;
  protected $stripe;
  protected $mailer;
  protected $userEventRepository;
  protected $logger;

  public function __construct(
    UserService $userService,
    RegistrationService $registrationService,
    UserRepository $userRepository,
    Stripe $stripe,
    Mailer $mailer,
    UserEventRepository $userEventRepository,
    Logger $logger
  )
  {
    // ...
  }
}

//DO
class UserController {
  protected $userService;
  protected $mailer;
  protected $logger;

  public function __construct(
    UserService $userService,
    Mailer $mailer,
    Logger $logger
  )
  {
    // ...
  }
}

class UserService {
  protected $userRepository;
  protected $userEventRepository;

  public function __construct(
    UserRepository $userRepository,
    UserEventRepository $userEventRepository
  )
  {
    // ...
  }
}

class AuthController {
  protected $registrationService;
  protected $stripe;
  
  public function __construct(
    RegistrationService $registrationService,
    Stripe $stripe
  )
  {
    // ...
  }
}
