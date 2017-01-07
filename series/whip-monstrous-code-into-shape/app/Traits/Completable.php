<?php

namespace App\Traits;

trait Completable {
    //    #2
    public function completions()
    {
        // fetch completions relationship.
    }

    public function complete()
    {
        // reference relationship to complete item.
    }

    public function uncomplete()
    {
        // reference relationship to uncomplete item.
    }

    public function completed()
    {
        // check if item is completed by user.
    }
}