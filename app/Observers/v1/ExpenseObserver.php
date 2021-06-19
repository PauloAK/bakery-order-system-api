<?php

namespace App\Observers\v1;

use App\Models\Expense;

class ExpenseObserver
{
    /**
     * Handle the Product "creating" event.
     *
     * @param  \App\Models\Expense  $expense
     * @return void
     */
    public function creating(Expense $expense)
    {
        $expense->user_id = auth()->id();
    }
}
