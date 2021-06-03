<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductExpense extends Model
{
    protected $fillable = [
        'product_id',
        'expense_id',
        'amount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function expense()
    {
        return $this->hasOne(Expense::class, 'expense_id');
    }
}
