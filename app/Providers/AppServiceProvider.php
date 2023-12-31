<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
use App\CategoryRepository\categoryinterface;
use App\CategoryRepository\categoryimplementation;
=======
use App\Repositary\testinterface;
use App\Repositary\testimplementation;
>>>>>>> sheyan


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
<<<<<<< HEAD
        //
        $this->app->bind(categoryinterface::class, categoryimplementation::class);
=======
        $this->app->bind(testinterface::class,testimplementation::class);
        
>>>>>>> sheyan
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultstringLength(191);
    }
}
