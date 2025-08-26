<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latest_blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        $newest_arrival = Product::orderBy('id', 'desc')->limit(4)->get();
        $latest_products = Product::inRandomOrder()->limit(5)->get();
        $categories = Category::orderBy('id', 'desc')->limit(8)->get();
        $wishlistIds = Auth::check()
        ? \App\Models\Wishlist::where('user_id', auth::id())->pluck('product_id')->toArray()
        : [];


        return view('welcome', compact('categories','latest_products','newest_arrival','latest_blogs','wishlistIds'));
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
}
