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
    
    <style>     
     .field-icon {
      float: right;
      margin-left: -25px;
        margin-right: 10px;
      margin-top: -27px;
      position: relative;
      z-index: 2;
    }
    </style>
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
          <h6 class="mb-0">Change Transaction Pin</h6>
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
      </div>
    </div>
    <div class="page-content-wrapper">
      <div class="container">
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
              <div class="user-profile me-3"><img src="/public/v1/assets/images/uploads/<?=$info->user_passport?>" alt=""></div>
              <div class="user-info">
              <p class="mb-0 text-dark">@<?=$info->user_code?></p>
              <h5 class="mb-0"><?=$info->user_fullname?></h5>
              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              <form id="changePinForm">
                <div class="mb-3">
                  <div class="title mb-2"><i class="ti ti-key"></i><span>Current Pin</span></div>
                  <input class="form-control" id="userid" value="<?=$info->userID?>" name="userid" type="hidden">
                  <input class="form-control" id="user_tpin" value="<?=$info->user_tpin?>" name="user_tpin" type="hidden">
                  <input class="form-control pin" id="opin" name="opin" type="password" placeholder="Current pin">
                  <span toggle="#opin" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="ti ti-key"></i><span>New Pin</span></div>
                  <input class="input-psswd pin form-control" id="npin" name="npin" type="password" placeholder="New pin">
                  <span toggle="#npin" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="ti ti-key"></i><span>Repeat New Pin</span></div>
                  <input class="form-control pin"  id="cpin" name="cpin"  type="password" placeholder="Confirm new pin">
                  <span toggle="#cpin" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                </div>
                <button class="btn btn-success w-100" id="btnUpdate" type="submit">Update Pin</button>
              </form>
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
    <script src="/public/api/js/jquery.magnific-popup.min.js"></script>
    <script src="/public/api/js/owl.carousel.min.js"></script>
    <script src="/public/api/js/jquery.counterup.min.js"></script>
    <script src="/public/api/js/jquery.countdown.min.js"></script>
    <script src="/public/api/js/jquery.passwordstrength.js"></script>
    <script src="/public/api/js/jquery.nice-select.min.js"></script>
    <script src="/public/api/js/theme-switching.js"></script>
    <script src="/public/api/js/active.js"></script>
    <script src="/public/api/js/pwa.js"></script>
    <link rel="stylesheet" href="/public/api/js/ogadan/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/public/api/js/ogadan/toastr/css/toastr.min.css">
    <script src="/public/api/js/ogadan/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/public/api/js/ogadan/toastr/js/toastr.min.js"></script>
    <script src="/public/api/js/ogadan/change-tpin.js"></script>
    <script>
$(".toggle-password").click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
  </body>
</html>