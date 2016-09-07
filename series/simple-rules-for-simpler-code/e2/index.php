<?php

//DO NOT
function signUp($subscription) {
  if ($subscription == 'monthly') {
    $this->createMonthlySubscription();
  }
  elseif ($subscription == 'forever') {
    $this->createForeverSubscription();
  }
}


//DO
function signUp(Subscription $subscription) {
  $subscription->create();
}
function getSubscriptionType($type)
{
  if($type == 'forever')
  {
    return new ForeverSubscription();
  }
  return new MonthlySubscription();
}
$subscription = getSubscriptionType();
signUp($subscription);
