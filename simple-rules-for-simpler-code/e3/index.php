<?php
/*
//DO NOT
class BankAccounts {
  protected $accounts;

  public function __construct($accounts)
  {
    $this->accounts = $accounts;
  }

  public function filterBy($accountType)
  {
    $filtered = [];

    foreach ($this->accounts as $account)
    {
      if ($account->getType() == $accountType )
      {
        if ($account->isActive())
        {
          $filtered[] = $account;
        }
      }
    }

    return $filtered;
  }
}
class Account
{
  protected $type;

  private function __construct($type)
  {
    $this->type = $type;
  }

  public function isActive() {
    return TRUE;
  }

  public function getType()
  {
      return $this->type;
  }

  public static function open($type)
  {
    return new static($type);
  }
}

$accounts = [
  Account::open('checking'),
  Account::open('saving'),
  Account::open('checking'),
  Account::open('saving')
];

$accounts = new BankAccounts($accounts);
$savings = $accounts->filterBy('checking');

var_dump($savings);
*/

//DO
class BankAccounts {
  protected $accounts;

  public function __construct($accounts)
  {
    $this->accounts = $accounts;
  }

  public function filterBy($accountType)
  {
    return array_filter($this->accounts, function ($account) use ($accountType)
    {
      return $account->isOfType($accountType);
    });
  }
}

class Account
{
  protected $type;

  private function __construct($type)
  {
    $this->type = $type;
  }

  public function isOfType($accountType)
  {
    return $this->getType() == $accountType && $this->isActive();
  }

  private function isActive() {
    return TRUE;
  }

  private function getType()
  {
      return $this->type;
  }

  public static function open($type)
  {
    return new static($type);
  }
}

$accounts = [
  Account::open('checking'),
  Account::open('saving'),
  Account::open('checking'),
  Account::open('saving')
];

$accounts = new BankAccounts($accounts);
$savings = $accounts->filterBy('saving');

var_dump($savings);
