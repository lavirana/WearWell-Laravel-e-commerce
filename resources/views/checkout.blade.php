@extends('pages.layout')

@section('content')

<div class="container my-5">
  <h2 class="fw-bold mb-4 text-center">Checkout</h2>

  <div class="row">
    <!-- Left Section: Shipping & Payment -->
    <div class="col-md-7">

      <!-- Shipping Information -->
      <div class="card shadow-sm mb-4">
        <div class="card-header bg-light fw-semibold">Shipping Information</div>
        <div class="card-body">
          <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Ashish Rana">
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" placeholder="+91 9876540000">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="example@email.com">
            </div>
            <div class="mb-3">
              <label class="form-label">Address</label>
              <textarea class="form-control" rows="3" placeholder="Street, City, State, Zip"></textarea>
            </div>
          </form>
        </div>
      </div>

      <!-- Payment Method -->
      <div class="card shadow-sm mb-4">
        <div class="card-header bg-light fw-semibold">Payment Method</div>
        <div class="card-body">
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="payment" id="cod" checked>
            <label class="form-check-label" for="cod">Cash on Delivery (COD)</label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="payment" id="card">
            <label class="form-check-label" for="card">Credit/Debit Card</label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="payment" id="upi">
            <label class="form-check-label" for="upi">UPI / Net Banking</label>
          </div>
        </div>
      </div>

    </div>

    <!-- Right Section: Order Summary -->
    <div class="col-md-5">
      <div class="card shadow-sm">
        <div class="card-header bg-light fw-semibold">Order Summary</div>
        <div class="card-body">
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Leather Wallet (x9)
              <span>$7191</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Wrist Watch (x3)
              <span>$7797</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Formal Trousers (x1)
              <span>$1599</span>
            </li>
            <li class="list-group-item d-flex justify-content-between fw-bold">
              Total
              <span>$16,587</span>
            </li>
          </ul>
          <!-- <button class="btn btn-success w-100">Place Order</button> -->

          <form action="{{ route('checkout.place') }}" method="POST">
    @csrf
    <!-- shipping info fields -->
    <button type="submit" class="btn btn-success w-100">Place Order</button>
</form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
