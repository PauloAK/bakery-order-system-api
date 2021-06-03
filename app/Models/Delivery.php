<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = "deliveries";

    protected $fillable = [
        'order_id',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
