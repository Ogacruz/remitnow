<?=view('auth/inc/meta')?>
<style>
    .imagePreview {
      width: 70px;
      height: 70px;
      border-radius: 50px;
      background-position: center center;
      background-size: cover;
      display: inline-block;
    }

    .password-icon {
      float: right;
      margin-left: -25px;
      margin-right: 10px;
      margin-top: -35px;
      position: relative;
      z-index: 2;
    }
  </style>
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
        <a href="/"> <i class="back-btn" data-feather="arrow-left"></i> </a>

        <img class="img-fluid img" src="/public/v1/assets/images/authentication/5.svg" alt="v1" />

        <div class="auth-content">
            <div>
            <img class="big-logo" style="width: 100px; border-radius:10px;" src="/public/api/img/logo.jpg" alt="">
                <h2>Welcome back!</h2>
                <h4 class="p-0">Login to Okanga</h4>
            </div>
        </div>
    </div>
    <!-- header end -->
    <!-- login section start -->
    <form class="auth-form" id="lform">
        <div class="custom-container">
            <h5 id="ozi"></h5>
            <div class="form-group">
                <label for="username" class="form-label">Email</label>
                <div class="form-input">
                    <input type="email" class="form-control" id="username"  name="username" placeholder="Enter email" />
                    <small><div id="uMsg" style="padding-top:10px;"></div> </small>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="form-input">
                    <input type="password" class="form-control" id="password"  name="password" placeholder="Enter password" />
                    <div class="password-icon"><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye"> </i><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye-off"> </i></div>
                    
                    <small><span id="pMsg" style="padding-top:10px;"></span> <span id="pass_msg" style="color: red;"></span> </small>
                </div>
            </div>
            <div class="remember-option mt-3" style="float:right" >
                <h5><a class="forgot" href="/forgot-username">Forgot Username</a> | <a class="forgot" href="/forgot-password"> Password?</a></h5>
            </div>
            <button type="submit" id="lbtn" class="btn theme-btn w-100">Sign In</button>
            <h4 class="signup">Don’t have an account ?<a href="/signup"> Sign up</a></h4>
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
    <script src="/public/v1/assets/js/api/jquery-3.7.1.js"></script>
    <script>
         const eye = document.querySelector(".feather-eye");
        const eyeoff = document.querySelector(".feather-eye-off");
        const passwordField = document.getElementById("password");
        eyeoff.style.display = "none";
        eye.style.display = "block";

        eyeoff.addEventListener("click", () => {
        eyeoff.style.display = "none";
        eye.style.display = "block";
        passwordField.setAttribute('type', 'password');
        });
        eye.addEventListener("click", () => {
        eye.style.display = "none";
        eyeoff.style.display = "block";
        passwordField.setAttribute('type', 'text');
        });
    </script>
    <script src="/public/v1/assets/js/api/login.js"></script>
</body>

</html>