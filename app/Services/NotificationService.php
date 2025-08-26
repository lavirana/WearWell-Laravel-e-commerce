<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class NotificationService
{
    public function sendOrderConfirmation($userEmail, $orderDetails)
    {
        // Example email send
        Mail::raw("Your order is confirmed. Details: " . json_encode($orderDetails), function($message) use ($userEmail) {
            $message->to($userEmail)->subject("Order Confirmation");
        });
    }

    public function send(string $to, string $message): bool
    {
        // For now, just log the notification (later you can hook into Mail, SMS, etc.)
        Log::info("📩 Notification sent to {$to}: {$message}");

        // You could also use Mail::to($to)->send(new OrderPlacedMail($message)) etc.
        
        return true;
    }
}
