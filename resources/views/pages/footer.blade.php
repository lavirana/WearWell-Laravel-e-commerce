
<footer id="footer" class="mt-5">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between py-5">
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-001">
            <div class="footer-intro mb-4">
            <a class="text-white" href="/" style="background-color: #80808024;
    padding: 0px 3px 0px 3px;">
            <strong style="color: #daa5208c;">W</strong>ear<strong>W</strong>ell
          </a>
            </div>
            <p>WearWell is your go-to destination for men’s fashion, offering a seamless shopping experience with easy navigation and secure payment options. With just a few clicks or taps, explore top men’s brands and bring home your favorites effortlessly.</p>
            <div class="social-links">
              <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#pinterest"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title text-uppercase mb-4">Quick Links</h5>
            <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
              <li class="menu-item">
                <a href="index.html" class="item-anchor">Home</a>
              </li>
              <li class="menu-item">
                <a href="index.html" class="item-anchor">About</a>
              </li>
              <li class="menu-item">
                <a href="blog.html" class="item-anchor">Services</a>
              </li>
              <li class="menu-item">
                <a href="styles.html" class="item-anchor">Single item</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-003">
            <h5 class="widget-title text-uppercase mb-4">Help & Info</h5>
            <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
              <li class="menu-item">
                <a href="#" class="item-anchor">Track Your Order</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Returns + Exchanges</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Shipping + Delivery</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Contact Us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Find us easy</a>
              </li>
              <li class="menu-item">
                <a href="index.html" class="item-anchor">Faqs</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-004 border-animation-left">
            <h5 class="widget-title text-uppercase mb-4">Contact Us</h5>
            <p>Do you have any questions or suggestions? <a href="mailto:contact@yourcompany.com"
                class="item-anchor"><br>contact@wearwell.com</a></p>
            <!-- <p>Do you need support? Give us a call. <a href="tel:+43 720 11 52 78" class="item-anchor">+43 720 11 52
                78</a>
            </p> -->
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/SmoothScroll.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/script.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

<script>

  $(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
      $(document).on('click', '.add_to_cart', function(){
          let productId = $(this).data('product-id');
          let userId = $(this).data('user-id');
          let quantity = $(this).data('quantity');
          $.ajax({
            url : "/add-to-cart",
            type: "POST",
            data: {
              product_id : productId,
              user_id : userId,
              quantity : quantity
            },
            success: function(response) {
              alert('Added to cart');
            },
            error: function(xhr){
              if (xhr.responseJSON && xhr.responseJSON.message) {
                alert(xhr.responseJSON.message); 
              } else {
                alert("Something went wrong!");
              }
            }
          })
      });
  });
</script>

</body>

</html>