<?php

namespace App;

use App\Values\Revenue;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public function getRevenueAttribute($revenue)
    {
        return new Revenue($revenue);
    }
}