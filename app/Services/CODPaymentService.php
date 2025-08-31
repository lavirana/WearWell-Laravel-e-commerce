<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class CODPaymentService implements PaymentGatewayInterface
{
    public function pay($amount)
    {
        return "Order placed with Cash on Delivery. Amount: Rs. {$amount}";
    }
}