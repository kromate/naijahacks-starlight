<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use SoftDeletes;

    const DONATION_TYPE = [
        'book',
        'time',
        'money',
        'material',
    ];

    const AVAILABLE_DONATION = 'available';
    const UNAVAILABLE_DONATION = 'unavailable';

    protected $fillable = [
        'name',
        'description',
        'type',
        'image',
        'attachments',
        'quantity',
        'location',
        'status',
        'donor_id',
    ];

    protected $casts = [
        'location' => 'array'
    ];

    public function isAvailable()
    {
        return $this->status == Donation::AVAILABLE_DONATION;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function donor()
    {
        return $this->belongsTo(Donor::class, 'donor_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transacton::class);
    }
}
