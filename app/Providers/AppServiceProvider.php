<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\ReviewRepositary\ReporitaryInterface;
use App\ReviewRepositary\RepositaryImplementation;

<<<<<<< HEAD
=======
use App\CategoryRepository\categoryinterface;
use App\CategoryRepository\categoryimplementation;
use App\Repositary\testinterface;
use App\Repositary\testimplementation;



>>>>>>> 7eab8903f3c052f913d1d76be0ec41b5afff2e5f
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
<<<<<<< HEAD
=======
        $this->app->bind(categoryinterface::class, categoryimplementation::class);
        $this->app->bind(testinterface::class, testimplementation::class);
>>>>>>> 7eab8903f3c052f913d1d76be0ec41b5afff2e5f
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
