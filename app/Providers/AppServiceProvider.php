<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Repositary\testinterface;
use App\Repositary\testimplementation;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(testinterface::class,testimplementation::class);
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultstringLength(191);
    }
}
