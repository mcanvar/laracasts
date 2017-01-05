<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTester extends TestCase
{
//    use DatabaseMigrations;

    protected $times = 1;

    protected function times($count)
    {
        $this->times = $count;

        return $this;
    }
}