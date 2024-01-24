<?=view('user/inc/meta')?>
<?php foreach ($infos as $key => $info) {} ?>
    <!-- CSS Libraries -->
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
    <?=view('user/inc/header')  ?>

    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
        aria-labelledby="suhaOffcanvasLabel">
        <!-- Close button-->
        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <!-- Offcanvas body-->
        <div class="offcanvas-body">
            <!-- Sidenav Profile-->
            <?=view('user/inc/sidenav')?>
        </div>
    </div>
    <div class="page-content-wrapper">
      <div class="container">
        <div class="settings-wrapper py-3">
            <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-key"></i><span>Password</span></div>
                <div class="data-content"><a href="/user/dashboard/change-password">Change<i class="ti ti-arrow-right"></i></a></div>
              </div>
            </div>
          </div>
          <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-key"></i><span>Transaction Pin</span></div>
                <div class="data-content"><a href="/user/dashboard/change-tpin">Change<i class="ti ti-arrow-right"></i></a></div>
              </div>
            </div>
          </div>
          <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">                 
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-moon"></i><span>Night Mode</span></div>
                <div class="data-content">
                  <div class="toggle-button-cover">
                    <div class="button r">
                      <input class="checkbox" id="darkSwitch" type="checkbox">
                      <div class="knobs"></div>
                      <div class="layer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-pilcrow"></i><span>RTL Mode</span></div>
                <div class="data-content">
                  <div class="toggle-button-cover">
                    <div class="button r">
                      <input class="checkbox" id="rtlSwitch" type="checkbox">
                      <div class="knobs"></div>
                      <div class="layer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-circle-check"></i><span>Availability</span></div>
                <div class="data-content">
                  <div class="toggle-button-cover">
                    <div class="button r">
                      <input class="checkbox" type="checkbox" checked>
                      <div class="knobs"></div>
                      <div class="layer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-bell-ringing"></i><span>Notifications</span></div>
                <div class="data-content">
                  <div class="toggle-button-cover">
                    <div class="button r">
                      <input class="checkbox" type="checkbox" checked>
                      <div class="knobs"></div>
                      <div class="layer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-question-mark"></i><span>Support</span></div>
                <div class="data-content"><a href="/user/dashboard/support">Get Help<i class="ti ti-arrow-right"></i></a></div>
              </div>
            </div>
          </div>
          <!-- Single Setting Card-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="ti ti-shield-lock"></i><span>Privacy Policy</span></div>
                <div class="data-content"><a href="/user/dashboard/privacy-policy">View<i class="ti ti-arrow-right"></i></a></div>
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