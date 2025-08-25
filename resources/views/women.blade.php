@extends('pages.layout')

@section('content')



<div class="container my-5">

  <!-- BIGGEST DEALS ON TOP BRANDS -->
  <section class="mb-5">
    <h2 class="text-center mb-4 fw-bold">BIGGEST DEALS ON TOP BRANDS</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{{ asset('images/women.jpg') }}" class="img-fluid rounded"></div>
        <div class="swiper-slide"><img src="{{ asset('images/women.jpg') }}" class="img-fluid rounded"></div>
        <div class="swiper-slide"><img src="{{ asset('images/women.jpg') }}" class="img-fluid rounded"></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- CATEGORIES TO BAG -->
  <section class="mb-5">
    <h2 class="text-center mb-4 fw-bold">CATEGORIES TO BAG</h2>
    <div class="row text-center">
      <div class="col-md-3 mb-3">
        <a href="{{route('category-listing')}}">
        <div class="card shadow-sm border-0">
          <img src="https://assets.myntassets.com/assets/images/2020/8/31/e72c82f2-cfd5-4f9a-b1b0-ba9e2b3e51251598892519506-W.jpg" class="card-img-top" alt="Shirts">
          <div class="card-body"><h6 class="fw-semibold">Shirts</h6></div>
        </div>
</a>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0">
          <img src="https://assets.myntassets.com/assets/images/2020/8/31/e72c82f2-cfd5-4f9a-b1b0-ba9e2b3e51251598892519506-W.jpg" class="card-img-top" alt="T-Shirts">
          <div class="card-body"><h6 class="fw-semibold">T-Shirts</h6></div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0">
          <img src="https://assets.myntassets.com/assets/images/2020/8/31/e72c82f2-cfd5-4f9a-b1b0-ba9e2b3e51251598892519506-W.jpg" class="card-img-top" alt="Jeans">
          <div class="card-body"><h6 class="fw-semibold">Jeans</h6></div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0">
          <img src="https://assets.myntassets.com/assets/images/2020/8/31/e72c82f2-cfd5-4f9a-b1b0-ba9e2b3e51251598892519506-W.jpg" class="card-img-top" alt="Kurtas">
          <div class="card-body"><h6 class="fw-semibold">Kurtas</h6></div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORE TOP BRANDS -->
  <section class="mb-5">
    <h2 class="text-center mb-4 fw-bold">EXPLORE TOP BRANDS</h2>
    <div class="row g-3">
      <div class="col-md-2 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-2 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-2 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-2 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-2 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-2 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
    </div>
  </section>

  <!-- MYNTRA LUXE -->
  <section class="mb-5 bg-light p-5 rounded shadow-sm">
    <h2 class="text-center mb-4 fw-bold">WEAR LUXE</h2>
    <div class="row text-center">
      <div class="col-md-4 mb-3"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded"></div>
      <div class="col-md-4 mb-3"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded"></div>
      <div class="col-md-4 mb-3"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded"></div>
    </div>
  </section>

  <!-- TRENDING IN INDIAN WEAR -->
  <section class="mb-5">
    <h2 class="text-center mb-4 fw-bold">TRENDING IN INDIAN WEAR</h2>
    <div class="row g-3">
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/19/2ff5c4e9-da10-4d12-9aae-86c38f4c281a1597840342549-Content-ethnicwear-brand-fusiondress.jpg" class="img-fluid rounded shadow-sm"></div>
    </div>
  </section>

  <!-- TRENDING IN SPORTS WEAR -->
  <section class="mb-5">
    <h2 class="text-center mb-4 fw-bold">TRENDING IN SPORTS WEAR</h2>
    <div class="row g-3">
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
    </div>
  </section>

  <!-- TRENDING IN FOOTWEAR -->
  <section class="mb-5">
    <h2 class="text-center mb-4 fw-bold">TRENDING IN FOOTWEAR</h2>
    <div class="row g-3">
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
    </div>
  </section>

  <!-- TRENDING IN ACCESSORIES -->
  <section class="mb-5">
    <h2 class="text-center mb-4 fw-bold">TRENDING IN ACCESSORIES</h2>
    <div class="row g-3">
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
      <div class="col-md-3 col-6"><img src="https://assets.myntassets.com/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg" class="img-fluid rounded shadow-sm"></div>
    </div>
  </section>

</div>


  
@endsection
