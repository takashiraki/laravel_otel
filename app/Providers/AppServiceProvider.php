<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Apps\Applications\Dispatch\DispatchService;
use Packages\Apps\Applications\Push\PushService;
use Packages\Apps\UseCases\Dispatch\IDispatchService;
use Packages\Apps\UseCases\Push\IPushService;
use Packages\Libs\Collection\MessageCollection\IMessageCollection;
use Packages\Libs\Collection\RedisCollection\RedisCollection;
use Packages\Libs\Illuminates\Str\IStr;
use Packages\Libs\Illuminates\Str\Strings;

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

        $this->app->bind(
            IStr::class,
            Strings::class
        );

        $this->app->bind(
            IPushService::class,
            PushService::class
        );

        $this->app->bind(
            IMessageCollection::class,
            RedisCollection::class
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
