<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\InventoryService;

class InventoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('InventoryService', function () {
            return new InventoryService();
        });
    }

    public function boot()
    {
        //
    }
}
