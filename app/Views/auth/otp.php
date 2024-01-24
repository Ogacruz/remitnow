<?=view('auth/inc/meta')?>
  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="/public/v1/assets/css/vendors/bootstrap.min.css" />

  <!-- swiper css -->
  <link rel="stylesheet" type="text/css" href="/public/v1/assets/css/vendors/swiper-bundle.min.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="/public/v1/assets/css/style.css" />
</head>

<body class="auth-body">
  <!-- header starts -->
  <div class="auth-header">
    <a href="/forgot-password"> <i class="back-btn" data-feather="arrow-left"></i> </a>

    <img class="img-fluid img" src="/public/v1/assets/images/authentication/2.svg" alt="v1" />

    <div class="auth-content">
      <div>
        <h2>OTP verification</h2>
        <h4 class="p-0">Enter 4 digit code</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" target="_blank">
    <div class="custom-container">
      <div class="form-group">
        <h5>Enter the 4-digit number we sent you in a registration message to confirm your email.</h5>
        <label for="inputusername" class="form-label">OTP</label>
        <div class="form-input">
          <input type="number" class="form-control" id="inputusername" placeholder="Enter OTP" />
        </div>
      </div>

      <a href="reset-password.html" class="btn theme-btn w-100">Verify</a>

      <h4 class="signup">Haven’t received yet ?<a href="otp.html"> Resend it </a></h4>
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