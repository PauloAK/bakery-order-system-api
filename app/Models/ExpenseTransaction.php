<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseTransaction extends Model
{
    protected $fillable = [
        'expense_id',
        'type',
        'amount',
    ];

    public function expense()
    {
        return $this->belongsTo(Expense::class, 'expense_id');
    }
}
