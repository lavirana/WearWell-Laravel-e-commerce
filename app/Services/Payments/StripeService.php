<?php

namespace App\Services\Payments;

class StripeService
{
    public function charge($amount, $currency = 'USD')
    {
        // Here you’d integrate Stripe API
        return [
            'status' => 'success',
            'gateway' => 'stripe',
            'amount' => $amount,
            'currency' => $currency
        ];
    }
}
