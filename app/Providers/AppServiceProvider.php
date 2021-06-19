<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\Expense;
use App\Models\Product;
use App\Observers\v1\CustomerObserver;
use App\Observers\v1\ExpenseObserver;
use App\Observers\v1\ProductObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Product::observe(ProductObserver::class);
        Customer::observe(CustomerObserver::class);
        Expense::observe(ExpenseObserver::class);
    }
}
