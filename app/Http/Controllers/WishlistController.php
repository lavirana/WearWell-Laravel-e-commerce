<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return view('wishlist', compact('wishlists'));
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $wishlist->delete();

        return redirect()->route('wishlist.index')->with('success', 'Item removed from wishlist!');
    }

    public function store(Request $request)
    {

        if (!Auth::check()) {
            return response()->json(['error' => 'You must be logged in to add to wishlist.'], 401);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);
    
        $wishlist = Wishlist::firstOrCreate([
            'user_id'    => auth::id(),
            'product_id' => $request->product_id,
        ]);
    
        // ✅ Return only necessary data instead of whole object
        return response()->json([
            'status'  => 'success',
            'message' => 'Product added to wishlist!',
            'product_id' => $wishlist->product_id,
        ]);
    }

    public function toggle(Request $request)
{
    $wishlist = Wishlist::where('user_id', auth::id())
                        ->where('product_id', $request->product_id)
                        ->first();

    if ($wishlist) {
        $wishlist->delete();
        return response()->json(['added' => false]);
    } else {
        Wishlist::create([
            'user_id' => auth::id(),
            'product_id' => $request->product_id,
        ]);
        return response()->json(['added' => true]);
    }
}

    

}
