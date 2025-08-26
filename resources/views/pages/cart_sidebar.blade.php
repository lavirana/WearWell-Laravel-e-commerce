<div id="cart-sidebar">
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        <span id="cart-count" class="badge bg-primary rounded-pill">{{ $totalItems ?? 0 }}</span>
      </h4>
      <ul class="list-group mb-3">
        @forelse($items as $item)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{ $item->product->name }}</h6>
              <small class="text-body-secondary">Qty: {{ $item->quantity }}</small>
            </div>
            <span class="text-body-secondary">${{ $item->product->price * $item->quantity }}</span>
          </li>
        @empty
          <li class="list-group-item text-center">Your cart is empty</li>
        @endforelse
      </ul>
      <a href="{{ route('checkout') }}" class="w-100 btn btn-primary btn-lg">Continue to Checkout</a>
    </div>
  </div>
</div>
