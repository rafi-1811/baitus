<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;


use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HomeController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        View::composer('*', function ($view) {
            $view->with('staticData', HomeController::staticData());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }


    
}
