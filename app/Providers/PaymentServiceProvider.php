<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Payments\RazorpayService;
use App\Services\Payments\StripeService;

class PaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Example: Choose payment gateway dynamically from config
        $this->app->singleton('PaymentGateway', function ($app) {
            $gateway = config('payment.default'); // e.g., 'razorpay' or 'stripe'

            return match ($gateway) {
                'razorpay' => new RazorpayService(),
                'stripe'   => new StripeService(),
                default    => new RazorpayService(),
            };
        });
    }

    public function boot()
    {
        //
    }
}
