<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $fillable = [
        'name',
        'street',
        'number',
        'zip',
        'neighborhood',
        'city',
        'state',
        'country',
        'complement',
        'observation',
        'default'
    ];

    protected $hidden = [
        'addressable_id',
        'addressable_type',
        'updated_at',
        'created_at'
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
