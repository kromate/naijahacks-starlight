<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transacton extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'donation_id',
        'reciever_id',
        'quantity',
    ];

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }

    public function reciever()
    {
        return $this->belongsTo(Reciever::class);
    }
}
