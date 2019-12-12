<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donor extends User
{
    use SoftDeletes;

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
