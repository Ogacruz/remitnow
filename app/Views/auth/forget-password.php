<?=view('auth/inc/meta')?>
  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="/public/v1/assets/css/vendors/bootstrap.min.css" />

  <!-- swiper css -->
  <link rel="stylesheet" type="text/css" href="/public/v1/assets/css/vendors/swiper-bundle.min.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="/public/v1/assets/css/style.css" />
</head>

<body>
  <!-- header starts -->
  <div class="auth-header">
    <a href="/signin"> <i class="back-btn" data-feather="arrow-left"></i> </a>
    <img class="img-fluid img" src="/public/v1/assets/images/authentication/3.svg" alt="v1" />
    <div class="auth-content">
      <div>
        <h2>Forget your pin</h2>
        <h4 class="p-0">Don’t worry !</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" target="_blank">
    <div class="custom-container">
      <div class="form-group">
        <h5>To reset your pin, enter your registered email or phone number.</h5>
        <label for="inputusername" class="form-label">Email or phone</label>
        <div class="form-input">
          <input type="email" class="form-control" id="inputusername" placeholder="Enter Your Email or phone" />
        </div>
      </div>

      <a href="/otp" class="btn theme-btn w-100">Update pin</a>
    </div>
  </form>
  <!-- login section start -->

  <!-- feather js -->
  <script src="/public/v1/assets/js/feather.min.js"></script>
  <script src="/public/v1/assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="/public/v1/assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="/public/v1/assets/js/script.js"></script>
</body>

</html>