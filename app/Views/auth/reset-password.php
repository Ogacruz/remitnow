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
    <a href="/otp"> <i class="back-btn" data-feather="arrow-left"></i> </a>

    <img class="img-fluid img1" src="/public/v1/assets/images/authentication/4.svg" alt="v1" />

    <div class="auth-content">
      <div>
        <h2>Reset your pin</h2>
        <h4 class="p-0">Add new one</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" target="_blank">
    <div class="custom-container">
      <div class="form-group">
        <h5>Enter your new pin, which must be different from your previous one.</h5>
        <label for="newpin" class="form-label">Enter new pin</label>
        <div class="form-input">
          <input type="number" class="form-control" id="newpin" placeholder="Enter new pin" />
        </div>
      </div>
      <div class="form-group">
        <label for="confirmpin" class="form-label">Re-enter new pin</label>
        <div class="form-input">
          <input type="number" class="form-control" id="confirmpin" placeholder="Re-enter new pin" />
        </div>
      </div>
      <a href="/successfully-signin" class="btn theme-btn w-100">Update pin</a>
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