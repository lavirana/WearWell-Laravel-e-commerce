<?php

namespace App\Services\Payments;

class RazorpayService
{
    public function charge($amount, $currency = 'INR')
    {
        // Here you’d integrate Razorpay API
        return [
            'status' => 'success',
            'gateway' => 'razorpay',
            'amount' => $amount,
            'currency' => $currency
        ];
    }
}
