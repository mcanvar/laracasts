<?php

interface BillingInterface {
  public function bill();
  public function retrieveCostumer();
  public function cancel();
}

class Stripe implements BillingInterface {
  public function bill()
  {

  }
  public function retrieveCostumer()
  {

  }
  public function cancel()
  {

  }
}

class AnotherClass {
  public function __construct(BillingInterface $billingInterface)
  {
    
  }
}
