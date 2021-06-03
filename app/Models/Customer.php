<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
