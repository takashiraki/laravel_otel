<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Apps\Applications\Dispatch\DispatchService;
use Packages\Apps\UseCases\Dispatch\IDispatchService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            IDispatchService::class,
            DispatchService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
