<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Facades\JWTAuth;

class User extends Authenticatable implements JWTSubject
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
    ];    

    protected $hidden = [
        'password'
    ];

    protected $appends = [
        'full_name'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'user_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'user_id');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function batches()
    {
        return $this->hasMany(Batch::class, 'user_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'email' => $this->email
        ];
    }
}
