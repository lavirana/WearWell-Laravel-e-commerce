
@extends('pages.layout')

@section('content')
<style>
  .shop-section {
  padding: 50px 20px;
  background: linear-gradient(135deg, #f8f9fa, #e9ecef); /* light gradient */
}

.shop-categories {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.category {
  text-align: center;
  margin: 15px;
}

.category img {
  max-width: 220px;
  border-radius: 5px;
  transition: transform 0.3s ease;
}

.category img:hover {
  transform: scale(1.05);
}

</style>
  <section id="billboard" class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-center">
         <!-- <h1 class="section-title text-center mt-4" data-aos="fade-up">New Collections</h1>
       <div class="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas ut dolorum consequuntur, adipisci
            repellat! Eveniet commodi voluptatem voluptate, eum minima, in suscipit explicabo voluptatibus harum,
            quibusdam ex repellat eaque!</p>
        </div> -->
      </div>
      <div class="row">
        <div class="swiper main-swiper py-4" data-aos="fade-up" data-aos-delay="600">
          <div class="swiper-wrapper d-flex border-animation-left">
            @foreach($latest_products as $latest_product)
            <div class="swiper-slide">
              <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                  <a href="#">
                    <img src="https://themewagon.github.io/kaira/images/banner-image-2.jpg" alt="product" class="img-fluid">
                  </a>
                </div>
                <div class="banner-content py-4">
                  <h5 class="element-title text-uppercase">
                    <a href="index.html" class="item-anchor">{{ $latest_product->name; }}</a>
                  </h5>
                  <p>{{ $latest_product->description; }}</p>
                  <div class="btn-left">
                    <a href="{{ route('product-detail') }}" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
            <use xlink:href="#arrow-left"></use>
          </svg></div>
        <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
            <use xlink:href="#arrow-right"></use>
          </svg></div>
      </div>
    </div>
  </section>





<section class="shop-section">
  <div class="shop-categories">
    <div class="category">
      <a href="{{route('shop.men')}}">
        <img src="https://themewagon.github.io/kaira/images/cat-item1.jpg" alt="Shop for Men">
        <p>SHOP FOR MEN</p>
      </a>
    </div>
    <div class="category">
    <a href="{{route('shop.women')}}">
      <img src="https://themewagon.github.io/kaira/images/cat-item2.jpg" alt="Shop for Women">
      <p>SHOP FOR WOMEN</p>
    </a>
    </div>
    <div class="category">
    <a href="#">
      <img src="https://themewagon.github.io/kaira/images/cat-item3.jpg" alt="Shop for Kids">
      <p>SHOP FOR KIDS</p>
    </a>
    </div>
    <div class="category">
    <a href="#">
      <img src="https://themewagon.github.io/kaira/images/cat-item3.jpg" alt="Shop Accessories">
      <p>SHOP ACCESSORIES</p>
    </a>
    </div>
    <div class="category">
    <a href="#">
      <img src="https://themewagon.github.io/kaira/images/cat-item3.jpg" alt="Shop Accessories">
      <p>SHOP ACCESSORIES</p>
    </a>
    </div>
  </div>
</section>



  <section id="new-arrival" class="bg-light new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Our New Arrivals</h4>
        <a href="index.html" class="btn-link">View All Products</a>
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
@foreach($newest_arrival as $newest_arr)
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.html">
                  <img src="https://themewagon.github.io/kaira/images/product-item-1.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <!-- <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> -->

                <button class="btn-icon btn-wishlist wishlist-btn" 
                      data-product="{{ $newest_arr->id }}">
                      <!-- <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg> -->
                  <i id="wishlist-icon-{{ $newest_arr->id }}"
               class="{{ in_array($newest_arr->id, $wishlistIds) ? 'fa-solid fa-heart text-red-500' : 'fa-regular fa-heart text-gray-400' }}">
            </i>
</button>

                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-5 mt-3">
                    <a href="index.html">{{ $newest_arr->name; }}</a>
                  </h5>
                  <!-- <a href="#" class="text-decoration-none add_to_cart" data-after="Add to cart"><span>₹{{ $newest_arr->price; }}</span></a> -->

                  <a href="javascript:void(0);" id="cart-btn-{{ $newest_arr->id }}" class="text-decoration-none add_to_cart" data-after="Add to cart" data-product-id="{{ $newest_arr->id }}" data-user-id="{{ Auth::id() }}" data-price="{{ $newest_arr->price }}"><span>₹{{ $newest_arr->price; }}</span></a>

                </div>
              </div>
            </div>
          </div>
        @endforeach;  
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div  class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div  class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section>



  <section id="best-sellers" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Best Selling Items</h4>
        <a href="index.html" class="btn-link">View All Products</a>
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="https://themewagon.github.io/kaira/images/product-item-4.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Dark florish onepiece</a>
                  </h5>
                  <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="https://themewagon.github.io/kaira/images/product-item-3.jpg" alt="product" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Baggy Shirt</a>
                  </h5>
                  <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="https://themewagon.github.io/kaira/images/product-item-5.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Cotton off-white shirt</a>
                  </h5>
                  <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="https://themewagon.github.io/kaira/images/product-item-6.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Handmade crop sweater</a>
                  </h5>
                  <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="https://themewagon.github.io/kaira/images/product-item-9.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Dark florish onepiece</a>
                  </h5>
                  <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="https://themewagon.github.io/kaira/images/product-item-10.jpg" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Cotton off-white shirt</a>
                  </h5>
                  <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section>

<!-- Shop by Category Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4 fw-bold">SHOP BY CATEGORY</h2>
    <div class="row g-4">
    @foreach ($categories as $category)
      <!-- Category Card -->
      <div class="col-6 col-md-3">
        <div class="card shadow-sm border-0 h-100">
          <img src="{{ asset('images/category/casual_wear.png') }}" class="card-img-top" alt="Ethnic Wear">
          <div class="card-body text-center">
            <h6 class="fw-bold">{{ $category->name; }}</h6>
            <a href="{{ route('category-listing') }}" class="btn btn-sm btn-outline-dark">Shop Now</a>
          </div>
        </div>
      </div>
@endforeach
     

    </div>
  </div>
</section>
  <section class="blog py-5">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Read Blog Posts</h4>
        <a href="index.html" class="btn-link">View All</a>
      </div>
      <div class="row">
        @foreach($latest_blogs as $latest_blog)
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="index.html">
                <img src="https://themewagon.github.io/kaira/images/post-image1.jpg" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">{{ $latest_blog->category; }} /</span>
                <span class="meta-day">{{ $latest_blog->created_at; }}</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="index.html">{{ $latest_blog->title; }}</a>
              </h5>
              <p>{{ $latest_blog->short_description; }}</p>
            </div>
          </article>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="logo-bar py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="logo-content d-flex flex-wrap justify-content-between">
          <img src="https://themewagon.github.io/kaira/images/logo1.png" alt="logo" class="logo-image img-fluid">
          <img src="https://themewagon.github.io/kaira/images/logo2.png" alt="logo" class="logo-image img-fluid">
          <img src="https://themewagon.github.io/kaira/images/logo3.png" alt="logo" class="logo-image img-fluid">
          <img src="https://themewagon.github.io/kaira/images/logo4.png" alt="logo" class="logo-image img-fluid">
          <img src="https://themewagon.github.io/kaira/images/logo5.png" alt="logo" class="logo-image img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="newsletter bg-light" style="background: url(images/pattern-bg.png) no-repeat;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 py-5 my-5">
          <div class="subscribe-header text-center pb-3">
            <h3 class="section-title text-uppercase">Sign Up for our newsletter</h3>
          </div>
          <form id="form" class="d-flex flex-wrap gap-2">
            <input type="text" name="email" placeholder="Your Email Addresss" class="form-control form-control-lg">
            <button class="btn btn-dark btn-lg text-uppercase w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="instagram position-relative">
    <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
      <a href="https://www.instagram.com/templatesjungle/" class="btn btn-dark px-5">Follow us on Instagram</a>
    </div>
    <div class="row g-0">
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="https://themewagon.github.io/kaira/images/insta-item1.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="https://themewagon.github.io/kaira/images/insta-item2.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="https://themewagon.github.io/kaira/images/insta-item3.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="https://themewagon.github.io/kaira/images/insta-item4.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="https://themewagon.github.io/kaira/images/insta-item5.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="https://themewagon.github.io/kaira/images/insta-item6.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>

  @endsection

