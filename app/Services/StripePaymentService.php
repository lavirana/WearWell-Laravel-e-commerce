<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class StripePaymentService implements PaymentGatewayInterface
{
    public function pay($amount)
    {
        // You would call Stripe API here
        return "Payment of Rs. {$amount} done via Stripe.";
    }
}
