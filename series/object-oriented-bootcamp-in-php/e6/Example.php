<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$mevlut = new Person('Mevlut Canvar');
$staff = new Staff([$mevlut]);
$laracasts = new Business($staff);

$laracasts->hire(new Person('Esra Canvar'));

var_dump($laracasts->getStaffMembers());
