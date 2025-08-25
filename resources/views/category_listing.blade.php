@extends('pages.layout')

@section('content')


<div class="container-fluid py-4">
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Footwear</a></li>
      <li class="breadcrumb-item active" aria-current="page">Women Casual Shoes</li>
    </ol>
  </nav>

  <!-- Page Title -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="fw-bold">Women Casual Shoes <small class="text-muted">(16,906 items)</small></h4>
    <!-- Sort Dropdown -->
    <select class="form-select w-auto">
      <option>Recommended</option>
      <option>What's New</option>
      <option>Popularity</option>
      <option>Better Discount</option>
      <option>Price: Low to High</option>
      <option>Price: High to Low</option>
      <option>Customer Rating</option>
    </select>
  </div>

  <div class="row">
    <!-- Sidebar Filters -->
    <div class="col-md-3" style="border: 1px solid #0000001f;
    padding: 5px;">
      <h4 class="fw-bold mb-2">Filters</h4>
<hr>
      <!-- Brand -->
      <div class="mb-3">
        <h6 class="fw-semibold">Brand</h6>
        <div>
  <input class="form-check-input" type="checkbox" value="puma" id="brandPuma">
  <label class="form-check-label" for="brandPuma" style="display: inline;
    padding-left: 8px;">Puma</label>
</div>

        <div>
          <input class="form-check-input" type="checkbox" id="roadster">
          <label class="form-check-label" for="roadster" style="display: inline;
    padding-left: 8px;">Roadster</label>
        </div>

        <div>
          <input class="form-check-input" type="checkbox" id="FAUSTO">
          <label class="form-check-label" for="FAUSTO" style="display: inline;
    padding-left: 8px;">FAUSTO</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="Skechers">
          <label class="form-check-label" for="Skechers" style="display: inline;
    padding-left: 8px;">Skechers</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="Converse">
          <label class="form-check-label" for="Converse" style="display: inline;
    padding-left: 8px;">Converse</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="DressBerry">
          <label class="form-check-label" for="DressBerry" style="display: inline;
    padding-left: 8px;">DressBerry</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="londan_rag">
          <label class="form-check-label" for="londan_rag" style="display: inline;
    padding-left: 8px;">London Rag</label>
        </div> 
        <div>
          <input class="form-check-input" type="checkbox" id="marc_loire">
          <label class="form-check-label" for="marc_loire" style="display: inline;
    padding-left: 8px;">Marc Loire</label>
        </div>
        <!-- Add more brands -->
      </div>

      <hr>
      <!-- Price -->
      <div class="mb-3">
        <h6 class="fw-semibold">Price</h6>
        <input type="range" class="form-range" min="200" max="10200">

        <span>₹300 - ₹3,100+</span>
      </div>

      <hr>
      <!-- Colors -->
      <div class="mb-3">
        <h6 class="fw-semibold">Color</h6>
        <div>
          <input class="form-check-input" type="checkbox" id="white">
          <label class="form-check-label" for="white" style="display: inline;
    padding-left: 8px;">White</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="black">
          <label class="form-check-label" for="black" style="display: inline;
    padding-left: 8px;">Black</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="black">
          <label class="form-check-label" for="black" style="display: inline;
    padding-left: 8px;">Pink</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="black">
          <label class="form-check-label" for="black" style="display: inline;
    padding-left: 8px;">Grey</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="black">
          <label class="form-check-label" for="black" style="display: inline;
    padding-left: 8px;">Blue</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="black">
          <label class="form-check-label" for="black" style="display: inline;
    padding-left: 8px;">Green</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="black">
          <label class="form-check-label" for="black" style="display: inline;
    padding-left: 8px;">Yellow</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="black">
          <label class="form-check-label" for="black" style="display: inline;
    padding-left: 8px;">Red</label>
        </div>
      </div>
      <hr>


      <div class="mb-3">
        <h6 class="fw-semibold">Discount Range</h6>
        <div>
          <input class="form-check-input" type="checkbox" id="white">
          <label class="form-check-label" for="white" style="display: inline;
    padding-left: 8px;">40% and above</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="white">
          <label class="form-check-label" for="white" style="display: inline;
    padding-left: 8px;">50% and above</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="white">
          <label class="form-check-label" for="white" style="display: inline;
    padding-left: 8px;">60% and above</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="white">
          <label class="form-check-label" for="white" style="display: inline;
    padding-left: 8px;">70% and above</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="white">
          <label class="form-check-label" for="white" style="display: inline;
    padding-left: 8px;">80% and above</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" id="white">
          <label class="form-check-label" for="white" style="display: inline;
    padding-left: 8px;">90% and above</label>
        </div>
      </div>
<hr>


    </div>

    <!-- Product Grid -->
    <div class="col-md-9">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        
        <!-- Product Card -->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <a href="{{ route('product-detail') }}">
            <img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="card-img-top" alt="Puma Shoes">
            <div class="card-body">
              <h6 class="card-title mb-1">Puma</h6>
              <p class="text-muted small mb-1">Carina Slim Women Sneakers</p>
              <p class="fw-bold mb-1">₹2249 <span class="text-muted text-decoration-line-through small">₹4499</span> <span class="text-success small">50% OFF</span></p>
              <span class="badge bg-success">4.3 ★</span> <small class="text-muted">4.1k</small>
            </div>
            </a>
          </div>
        </div>

        <!-- Repeat More Products -->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="card-img-top" alt="Neeman Sneakers">
            <div class="card-body">
              <h6 class="card-title mb-1">Neeman’s</h6>
              <p class="text-muted small mb-1">Woven Design PU Sneakers</p>
              <p class="fw-bold mb-1">₹2199 <span class="text-muted text-decoration-line-through small">₹2499</span> <span class="text-success small">₹300 OFF</span></p>
              <span class="badge bg-success">5.0 ★</span> <small class="text-muted">11</small>
            </div>
          </div>
        </div>

          <!-- Repeat More Products -->
          <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="card-img-top" alt="Neeman Sneakers">
            <div class="card-body">
              <h6 class="card-title mb-1">Neeman’s</h6>
              <p class="text-muted small mb-1">Woven Design PU Sneakers</p>
              <p class="fw-bold mb-1">₹2199 <span class="text-muted text-decoration-line-through small">₹2499</span> <span class="text-success small">₹300 OFF</span></p>
              <span class="badge bg-success">5.0 ★</span> <small class="text-muted">11</small>
            </div>
          </div>
        </div>

          <!-- Repeat More Products -->
          <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="card-img-top" alt="Neeman Sneakers">
            <div class="card-body">
              <h6 class="card-title mb-1">Neeman’s</h6>
              <p class="text-muted small mb-1">Woven Design PU Sneakers</p>
              <p class="fw-bold mb-1">₹2199 <span class="text-muted text-decoration-line-through small">₹2499</span> <span class="text-success small">₹300 OFF</span></p>
              <span class="badge bg-success">5.0 ★</span> <small class="text-muted">11</small>
            </div>
          </div>
        </div>
          <!-- Repeat More Products -->
          <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="card-img-top" alt="Neeman Sneakers">
            <div class="card-body">
              <h6 class="card-title mb-1">Neeman’s</h6>
              <p class="text-muted small mb-1">Woven Design PU Sneakers</p>
              <p class="fw-bold mb-1">₹2199 <span class="text-muted text-decoration-line-through small">₹2499</span> <span class="text-success small">₹300 OFF</span></p>
              <span class="badge bg-success">5.0 ★</span> <small class="text-muted">11</small>
            </div>
          </div>
        </div>
          <!-- Repeat More Products -->
          <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="card-img-top" alt="Neeman Sneakers">
            <div class="card-body">
              <h6 class="card-title mb-1">Neeman’s</h6>
              <p class="text-muted small mb-1">Woven Design PU Sneakers</p>
              <p class="fw-bold mb-1">₹2199 <span class="text-muted text-decoration-line-through small">₹2499</span> <span class="text-success small">₹300 OFF</span></p>
              <span class="badge bg-success">5.0 ★</span> <small class="text-muted">11</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


@endsection
