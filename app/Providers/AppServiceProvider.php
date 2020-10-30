<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
        view::composer('layouts.master' , function($view) {
            // Sharing setting to all view of websites
           $view->with('settings' , Settings::all()[0]);
        });
    }
}
