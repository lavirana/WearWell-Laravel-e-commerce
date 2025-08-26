@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold mb-6">My Wishlist ❤️</h1>

    @if($wishlists->isEmpty())
        <div class="p-6 bg-gray-100 rounded-xl shadow text-center">
            <p class="text-lg text-gray-600">Your wishlist is empty 😔</p>
            <a href="{{ url('/') }}" class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Continue Shopping</a>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($wishlists as $wishlist)
                <div class="bg-white shadow rounded-xl overflow-hidden">
                    <img src="{{ $wishlist->product->image ?? 'https://via.placeholder.com/300' }}" 
                         alt="{{ $wishlist->product->name }}" 
                         class="w-full h-48 object-cover">

                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{ $wishlist->product->name }}</h2>
                        <p class="text-gray-600 mt-1">₹{{ number_format($wishlist->product->price, 2) }}</p>

                        <div class="flex items-center justify-between mt-4">
                            <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add to Cart</a>
                            <form method="POST" action="{{ route('wishlist.remove', $wishlist->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Remove ❌</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
