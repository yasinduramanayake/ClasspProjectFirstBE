<?php

namespace App\Providers;

use App\ProductRepository\productinterface;
use App\ProductRepository\productimplementaion;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(productinterface::class, productimplementaion::class);
    }  

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultstringLength(191);
    }
}
