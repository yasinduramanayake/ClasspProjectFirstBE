<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\ReviewRepositary\ReporitaryInterface;
use App\ReviewRepositary\RepositaryImplementation;

use App\CategoryRepository\categoryinterface;
use App\CategoryRepository\categoryimplementation;
use App\Repositary\testinterface;
use App\Repositary\testimplementation;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(categoryinterface::class, categoryimplementation::class);
        $this->app->bind(testinterface::class, testimplementation::class);
        $this->app->bind(ReporitaryInterface::class, RepositaryImplementation::class);

        //
        $this->app->bind(categoryinterface::class, categoryimplementation::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultstringLength(191);
    }
}
