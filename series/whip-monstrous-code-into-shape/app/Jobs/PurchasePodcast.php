<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;

class PurchasePodcast
{
    use Queueable;

    public function handle()
    {
        $this->preparePurchase()
            ->sendEmail();
    }

    private function preparePurchase()
    {
        dump('preparing the purchase');

        return $this;
    }

    private function sendEmail()
    {
        dump('sending email');

        return $this;
    }
}
