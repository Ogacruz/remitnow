
<?=view('user/inc/meta')?>
<?php foreach ($infos as $key => $info) {} ?>
    <link rel="stylesheet" href="/public/api/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/api/css/tabler-icons.min.css">
    <link rel="stylesheet" href="/public/api/css/animate.css">
    <link rel="stylesheet" href="/public/api/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/public/api/css/magnific-popup.css">
    <link rel="stylesheet" href="/public/api/css/nice-select.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/public/api/style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="/public/api/manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
        <!-- Back Button-->
        <div class="back-button me-2"><a href="/user/dashboard/settings"><i class="ti ti-arrow-left"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Support</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas">
          <div><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <?=view('user/inc/sidenav')?>
        <!-- Sidenav Nav-->
        
      </div>
    </div>
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Support Wrapper-->
        <div class="support-wrapper py-3">
          <div class="card">
            <div class="card-body">
              <h5 class="faq-heading text-center">How can we help you with?</h5>
              <!-- Search Form-->
              <form class="faq-search-form" action="#" method="">
                <input class="form-control" type="search" name="search" placeholder="Search">
                <button type="submit"><i class="ti ti-search"></i></button>
              </form>
            </div>
          </div>
          <!-- Accordian Area Wrapper-->
          <div class="accordian-area-wrapper mt-3">
            <!-- Accordian Card-->
            <div class="card accordian-card">
              <div class="card-body">
                <h5 class="accordian-title">For Buyers</h5>
                <div class="accordion" id="accordion1">
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingOne">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span><i class="ti ti-bike"></i>How to get started?</span><i class="ti ti-arrow-down"></i></button>
                  </div>
                  <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero excepturi tempore exercitationem porro dignissimos.</p>
                  </div>
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingTwo">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span><i class="ti ti-shopping-cart-cog"></i>How to buy a product?</span><i class="ti ti-arrow-down"></i></button>
                  </div>
                  <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordion1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero excepturi tempore exercitationem porro dignissimos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordian Area Wrapper-->
          <div class="accordian-area-wrapper mt-3">
            <!-- Accordian Card-->
            <div class="card accordian-card seller-card">
              <div class="card-body">
                <h5 class="accordian-title">For Authors</h5>
                <div class="accordion" id="accordion2">
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingThree">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span><i class="ti ti-cloud-down"></i>How can upload a product?</span><i class="ti ti-arrow-down"></i></button>
                  </div>
                  <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordion2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero excepturi tempore exercitationem porro dignissimos.</p>
                  </div>
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingFour">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span><i class="ti ti-currency-dollar"></i>Commission structure</span><i class="ti ti-arrow-down"></i></button>
                  </div>
                  <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordion2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero excepturi tempore exercitationem porro dignissimos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordian Area Wrapper-->
          <div class="accordian-area-wrapper mt-3">
            <!-- Accordian Card-->
            <div class="card accordian-card others-card">
              <div class="card-body">
                <h5 class="accordian-title">Others</h5>
                <div class="accordion" id="accordion3">
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingFive">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span><i class="ti ti-arrow-right"></i>How to return a product?</span><i class="ti ti-arrow-down"></i></button>
                  </div>
                  <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordion3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero excepturi tempore exercitationem porro dignissimos.</p>
                  </div>
                  <!-- Single Accordian-->
                  <div class="accordian-header" id="headingSix">
                    <button class="d-flex align-items-center justify-content-between w-100 collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><span><i class="ti ti-face-id-error"></i>My product is misleading?</span><i class="ti ti-arrow-down"></i></button>
                  </div>
                  <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordion3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero excepturi tempore exercitationem porro dignissimos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <?=view('user/inc/footer')?>
    <!-- All JavaScript Files-->

    <script src="/public/api/js/waypoints.min.js"></script>
    <script src="/public/api/js/jquery.easing.min.js"></script>
    <script src="/public/api/js/owl.carousel.min.js"></script>
    <script src="/public/api/js/jquery.magnific-popup.min.js"></script>
    <script src="/public/api/js/jquery.counterup.min.js"></script>
    <script src="/public/api/js/jquery.countdown.min.js"></script>
    <script src="/public/api/js/jquery.passwordstrength.js"></script>
    <script src="/public/api/js/jquery.nice-select.min.js"></script>
    <script src="/public/api/js/theme-switching.js"></script>
    <script src="/public/api/js/no-internet.js"></script>
    <script src="/public/api/js/active.js"></script>
    <script src="/public/api/js/pwa.js"></script>
  </body>
</html>