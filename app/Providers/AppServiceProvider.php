<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\Services\Entities\Service;

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
        view::composer('*', function ($view) {
            // Sharing setting to all view of websites
            $company    = Company::all()[0];
            $services   = Service::all();
            $view->with('company_settings', $company);
            $view->with('company_services', $services);
        });
    }
}
