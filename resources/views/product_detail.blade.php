

@extends('pages.layout')

@section('content')
  <style>



    .container {
      display: flex;
      padding: 30px;
    }
    .product-images {
      flex: 2;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
    }
    .product-images img {
      width: 100%;
      border-radius: 6px;
    }
    .product-details {
      flex: 1;
      padding-left: 30px;
    }
    .product-details h2 {
      font-size: 22px;
      margin-bottom: 5px;
    }
    .price {
      font-size: 20px;
      font-weight: bold;
      margin: 10px 0;
    }
    .price del {
      font-size: 16px;
      color: #888;
      margin-left: 10px;
    }
    .discount {
      color: red;
      font-size: 14px;
      margin-left: 10px;
    }
    .sizes span {
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      line-height: 35px;
      text-align: center;
      margin-right: 10px;
      cursor: pointer;
    }
    .buttons {
      margin-top: 20px;
    }
    .buttons button {
      padding: 12px 20px;
      margin-right: 10px;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      font-weight: bold;
    }
    .add-to-bag {
      background: #ff3f6c;
      color: #fff;
    }
    .wishlist {
      background: #eee;
    }
    .offers {
      margin-top: 20px;
      font-size: 14px;
    }
    .offers p {
      margin: 5px 0;
    }
    .similar-products {
      padding: 30px;
    }
    .similar-products h3 {
      margin-bottom: 15px;
    }
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 20px;
    }
    .product-card {
      border: 1px solid #eee;
      padding: 10px;
      border-radius: 6px;
      text-align: center;
    }
    .product-card img {
      width: 100%;
      border-radius: 6px;
    }
    .product-card p {
      margin: 8px 0;
      font-size: 14px;
    }
    .product-card .price {
      font-size: 16px;
      font-weight: bold;
    }
  </style>


  <!-- Product Section -->
  <div class="container">
    <!-- Product Images -->
    <div class="product-images">
      <img src="https://themewagon.github.io/kaira/images/product-item-1.jpg" alt="Product Image 1">
      <img src="https://themewagon.github.io/kaira/images/product-item-1.jpg" alt="Product Image 2">
      <img src="https://themewagon.github.io/kaira/images/product-item-1.jpg" alt="Product Image 3">
      <img src="https://themewagon.github.io/kaira/images/product-item-1.jpg" alt="Product Image 4">
    </div>

    <!-- Product Details -->
    <div class="product-details">
      <h2>KIMAYRA</h2>
      <p>Floral Printed Anarkali Pure Cotton Kurta With Palazzos And Dupatta</p>
      <div class="price">₹1399 <del>₹3599</del> <span class="discount">(Rs. 2200 OFF)</span></div>

      <h4>Select Size</h4>
      <div class="sizes">
        <span>S</span>
        <span>M</span>
        <span>L</span>
        <span>XL</span>
        <span>XXL</span>
      </div>

      <div class="buttons">
        <button class="add-to-bag">ADD TO BAG</button>
        <button class="wishlist">WISHLIST</button>
      </div>

      <div class="offers">
        <h4>Best Offers</h4>
        <p>Best Price: Rs. 1099</p>
        <p>Coupon code: WEARWELLWOWZ (35% off)</p>
        <p>10% Discount on HSBC Credit Cards (Min Spend ₹5000)</p>
      </div>
    </div>
  </div>

  <!-- Similar Products -->
  <div class="similar-products">
    <h3>Similar Products</h3>
    <div class="products-grid">
      <div class="product-card">
        <img src="https://themewagon.github.io/kaira/images/post-image2.jpg" alt="Product">
        <p>Khushal K Printed Anarkali Kurta Set</p>
        <div class="price">₹1624 <del>₹6499</del></div>
      </div>
      <div class="product-card">
        <img src="https://themewagon.github.io/kaira/images/post-image2.jpg" alt="Product">
        <p>KALINI Women Printed Kurta</p>
        <div class="price">₹1599 <del>₹8179</del></div>
      </div>
      <div class="product-card">
        <img src="https://themewagon.github.io/kaira/images/post-image2.jpg" alt="Product">
        <p>Anouk Pure Cotton Kurta</p>
        <div class="price">₹1550 <del>₹4699</del></div>
      </div>
      <div class="product-card">
        <img src="https://themewagon.github.io/kaira/images/post-image2.jpg" alt="Product">
        <p>GoSriKi Gotta Patti Kurta Set</p>
        <div class="price">₹1098 <del>₹4345</del></div>
      </div>
      <div class="product-card">
        <img src="https://themewagon.github.io/kaira/images/post-image2.jpg" alt="Product">
        <p>GoSriKi Gotta Patti Kurta Set</p>
        <div class="price">₹1098 <del>₹4345</del></div>
      </div>
      <div class="product-card">
        <img src="https://themewagon.github.io/kaira/images/post-image2.jpg" alt="Product">
        <p>GoSriKi Gotta Patti Kurta Set</p>
        <div class="price">₹1098 <del>₹4345</del></div>
      </div>
      <div class="product-card">
        <img src="https://themewagon.github.io/kaira/images/post-image2.jpg" alt="Product">
        <p>GoSriKi Gotta Patti Kurta Set</p>
        <div class="price">₹1098 <del>₹4345</del></div>
      </div>
    </div>
  </div>
  
  @endsection
