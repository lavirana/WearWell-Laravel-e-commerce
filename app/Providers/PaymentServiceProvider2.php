<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentGatewayInterface;
use App\Services\CODPaymentService;
use App\Services\StripePaymentService;

class PaymentServiceProvider2 extends ServiceProvider
{
    public function register(): void
    {
        // Example: Bind based on config or request
        $this->app->bind(PaymentGatewayInterface::class, function ($app) {
            $method = request()->input('payment_method', 'cod'); 

            if ($method === 'stripe') {
                return new StripePaymentService();
            }

            return new CODPaymentService(); 
        });
    }

    public function boot(): void
    {
        //
    }
}
