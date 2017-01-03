<?php

namespace App\Http\Controllers;

use App\Jobs\PurchasePodcast;

class PurchaseController extends Controller
{
    public function store()
    {
        $this->dispatch(new PurchasePodcast);

        return 'Done';
    }
}
