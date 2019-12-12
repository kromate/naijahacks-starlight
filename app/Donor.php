<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends User
{
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
