<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentGatewayInterface;

class CheckoutController extends Controller
{

    protected $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('checkout');
    }

    public function placeOrder2()
    {
        $amount = 16587; // from cart total
        return $this->paymentGateway->pay($amount);
    }

    public function placeOrder(Request $request)
    {
        // 1️⃣ Payment
        $payment = app('PaymentGateway');
        $response = $payment->charge(16587, 'INR'); // dynamically from cart

        if ($response['status'] !== 'success') {
            return back()->with('error', 'Payment failed!');
        }

        // 2️⃣ Inventory
        $inventory = app('InventoryService');
        $inventory->decreaseStock('wallet', 9);
        $inventory->decreaseStock('watch', 3);
        $inventory->decreaseStock('trousers', 1);

        // 3️⃣ Notification
        $notify = app('NotificationService');

        // Try to get email from request OR logged-in user
        $userEmail = $request->input('email') ?? auth()->user()->email ?? null;

        if ($userEmail) {
            $notify->send($userEmail, "Your order has been placed successfully!");
        } else {
            \Log::warning("⚠️ No email found for notification in CheckoutController.");
        }

        return redirect()->route('checkout.success')->with('success', 'Order placed!');
    }

    public function success()
    {
        return view('checkout-success');
    }

    public function pay(Request $request)
    {
        // Resolve PaymentGateway from service container
        $payment = app('PaymentGateway');

        // Example: Call a method
        $response = $payment->charge(1000, 'INR'); // charge ₹1000

        return response()->json($response);
    }

    // The rest of the CRUD methods remain unchanged...
}
