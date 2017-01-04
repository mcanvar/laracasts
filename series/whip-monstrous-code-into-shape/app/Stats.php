<?php

namespace App;

class Stats {
    protected $user;

    /**
     * Stats constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function favorites()
    {
        return 15;
    }

    public function completions()
    {
        return 77;
    }

    public function experience()
    {
        return 12345;
    }
}