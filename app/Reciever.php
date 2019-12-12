<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reciever extends User
{
    use SoftDeletes;

    public function transactions()
    {
        return $this->hasMany(Transacton::class);
    }
}
