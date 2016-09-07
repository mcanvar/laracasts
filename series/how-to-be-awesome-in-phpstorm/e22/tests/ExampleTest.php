<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }

    public function testAbout()
    {
        $this->call('GET', '/about');
        $this->assertResponseOk();
    }
}
