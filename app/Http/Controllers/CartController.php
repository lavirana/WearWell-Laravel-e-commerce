<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function addToCart(Request $request)
    {
        $user = Auth::user();
    
        // User ke liye cart fetch ya create
        $cart = Cart::firstOrCreate(
            ['user_id' => $user->id],
            ['created_at' => now(), 'updated_at' => now()]
        );
    
        // Check if product already exists in cart with status pending
        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $request->product_id)
            ->where('status', 'pending')
            ->first();
    
        if ($cartItem) {
            $cartItem->quantity += $request->quantity ?? 1;
            $cartItem->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity ?? 1,
                'status' => 'pending'
            ]);
        }
        // Get updated cart items
        $items = CartItem::where('cart_id', $cart->id)
            ->where('status', 'pending')
            ->with('product')
            ->get();
        // Total items count
        $totalItems = $items->sum('quantity');
        // Sidebar HTML render (ab ye header ka hi cart-section hoga)
        $cartHtml = view('pages.cart_sidebar', compact('items', 'totalItems'))->render();
        return response()->json([
            'message' => 'Product added to cart successfully!',
            'total_items' => $totalItems,
            'cart_html' => $cartHtml
        ]);
    }
    
    
            public function getCart()
            {
                $user = Auth::user();
                $cart = Cart::where('user_id', $user->id)->first();
                $items = [];
                $totalItems = 0;

                if ($cart) {
                    $items = CartItem::where('cart_id', $cart->id)
                        ->where('status', 'pending')
                        ->with('product')
                        ->get();
                    $totalItems = $items->sum('quantity');
                }
                $cartHtml = view('pages.cart_sidebar', compact('items', 'totalItems'))->render();
                return response()->json([
                    'cart_html' => $cartHtml,
                    'total_items' => $totalItems
                ]);
            }

            public function getUserPendingCartCount()
            {
                $user = Auth::user();
                $totalItems = 0;
            
                if ($user) {
                    $cart = Cart::where('user_id', $user->id)->first();
            
                    if ($cart) {
                        $totalItems = CartItem::where('cart_id', $cart->id)
                            ->where('status', 'pending')
                            ->sum('quantity');
                    }
                }
            
                return response()->json([
                    'total_items' => $totalItems
                ]);
            }
            

            public function checkout(){
                return view('checkout');
            }



            public function placeOrder(Request $request)
{
    // 1️⃣ Payment
    $payment = app('PaymentGateway');
    $response = $payment->charge(16587, 'INR'); // take total dynamically from cart

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
    $notify->send($request->email, "Your order has been placed successfully!");

    return redirect()->route('checkout.success');
}

public function success()
{
    return view('checkout-success'); // create blade file for success page
}

    
    
}
