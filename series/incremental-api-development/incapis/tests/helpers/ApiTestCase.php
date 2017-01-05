<?php

class ApiTestCase extends TestCase
{
    use ApiFactory;

    protected function authenticate($user)
    {
        if (Auth::attempt(['email' => $user['email'], 'password' => 'password'])) {
            return true;
        }

        return false;
    }
}