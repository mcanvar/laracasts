<?php

use App\User;
use Illuminate\Support\Facades\Auth;

trait ApiFactory
{
    protected $times = 1;

    protected function times($count)
    {
        $this->times = $count;

        return $this;
    }

    protected function make($type)
    {
        while ($this->times--){
            factory($type)->create();
        }
    }

    protected function generate($type)
    {
        return factory($type)->make()->toArray();
    }

    protected function getFirstUser()
    {
        return User::select('email')->find(1)->toArray();
    }
}