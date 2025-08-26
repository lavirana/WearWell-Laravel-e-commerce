<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NotificationService;

class NotificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('NotificationService', function () {
            return new NotificationService();
        });
    }

    public function boot()
    {
        //
    }
}
