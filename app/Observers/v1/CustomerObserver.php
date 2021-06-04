<?php

namespace App\Observers\v1;

use App\Models\Customer;

class CustomerObserver
{
    /**
     * Handle the Customer "creating" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function creating(Customer $customer)
    {
        $customer->user_id = auth()->id();
    }
}
