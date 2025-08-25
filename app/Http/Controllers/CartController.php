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
    
        // Cart find/create
        $cart = Cart::firstOrCreate(
            ['user_id' => $user->id],
            ['created_at' => now(), 'updated_at' => now()]
        );
    
        // CartItem check (only pending items)
        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $request->product_id)
            ->where('status', 'pending') // 👈 check only pending items
            ->first();
    
        if ($cartItem) {
            // अगर अभी तक purchase नहीं किया है → quantity plus
            $cartItem->quantity += $request->quantity ?? 1;
            $cartItem->save();
        } else {
            // अगर product already completed है → नया record बनेगा
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity ?? 1,
                'status' => 'pending'
            ]);
        }
    
        return response()->json(['message' => 'Product added to cart successfully!']);
    }
    
    
}
