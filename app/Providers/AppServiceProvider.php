<?php

namespace App\Providers;

use App\ProductRepository\productinterface;
use App\ProductRepository\productimplementation;
use App\CategoryRepository\categoryinterface;
use App\CategoryRepository\categoryimplementation;
use App\OrderRepository\orderinterface;
use App\OrderRepository\orderimplementation;
use App\UserRepository\userimplementation;
use App\UserRepository\userinterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(productinterface::class, productimplementation::class);   
        $this->app->bind(categoryinterface::class, categoryimplementation::class);    
        $this->app->bind(orderinterface::class, orderimplementation::class);     
        $this->app->bind(userinterface::class, userimplementation::class);    
    }  

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultstringLength(191);
    }
}
