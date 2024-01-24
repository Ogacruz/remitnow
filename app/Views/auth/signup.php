<?=view('auth/inc/meta')?>
  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="/public/v1/assets/css/vendors/bootstrap.min.css" />

  <!-- swiper css -->
  <link rel="stylesheet" type="text/css" href="/public/v1/assets/css/vendors/swiper-bundle.min.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="/public/v1/assets/css/style.css" />
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

</head>

<body class="auth-body">
  <!-- header starts -->
  <div class="auth-header">
    <!-- <a href="/signin"> <i class="back-btn" data-feather="arrow-left"></i> </a> -->

    <img class="img-fluid img" src="/public/v1/assets/images/authentication/6.svg" alt="v1" />

    <div class="auth-content">

      <div style="text-align: center;">
            <img class="big-logo" style="width: 100px; border-radius:10px;" src="/public/api/img/logo.jpg" alt="">
                <h2>Welcome back!</h2>
                <h4 class="p-0">Fill up the form</h4>
            </div>

            
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  
  <form class="auth-form" id="rForm" target="_blank" enctype="multipart/form-data">
    <div class="custom-container" id="step0">

      <div class="form-group">
        <label for="fname" class="form-label">Full name</label>
        <div class="form-input">
          <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your name" />
          <span id="fname_msg" style="color: red;"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <div class="form-input">
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" />
          <span id="email_msg" style="color: red;"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <div class="form-input">
          <input type="password" class="form-control" id="password" name="password"  placeholder="Enter password" />
          <div class="password-icon"><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye"> </i><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye-off"> </i></div>
          <span id="pass_msg" style="color: red;"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="password2" class="form-label">Re-enter password</label>
        <div class="form-input">
          <input type="password" class="form-control" id="password2"  placeholder="Re-enter password" />
          <div class="password-icon"><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2 feather-eye2" data-feather="eye"> </i><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2 feather-eye-off2" data-feather="eye-off"></i></div>
          <span id="pass2_msg" style="color: red;"></span>
        </div>
      </div>
      <button type="button" id="next0" class="btn theme-btn w-100">Next</button>
    </div>

    <div class="custom-container" id="step1" style="display: none;">
      <div class="form-group">
        <label for="inputusername" class="form-label">Username</label>
        <div class="form-input">
          <input type="text" class="form-control" id="inputusername" readonly placeholder="Enter Your Email" />
        </div>
      </div>

      <div class="form-group">
        <label for="phone" class="form-label">Phone number</label>
        <div class="form-input">
          <input type="tel" class="form-control"  id="phone" name="phone" placeholder="Enter your phone number" />
          <span id="phone_msg" style="color: red;"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="day" class="form-label">Date of birth</label>
        <div class="d-flex gap-2">
          <select id="day" name="day" class="form-select">
            <option value="">Day</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option selected>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
          <span id="day_msg" style="color: red;"></span>
          <select id="month" name="month" class="form-select">
            <option value="">Month</option>
            <optionselected>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <span id="month_msg" style="color: red;"></span>
          <select id="year" name="year" class="form-select">
            <option value="">Year</option>
            
            <?php
            define('DOB_YEAR_START', 1900);
            $current_year = date('Y');
            for ($count = $current_year; $count >= DOB_YEAR_START; $count--) {
              print "<option value='{$count}'>{$count}</option>";
            }
            ?>
            <option selected>1986</option>
          </select>
          <span id="year_msg" style="color: red;"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="sex" class="form-label">Gender</label>
        <select id="sex" name="sex" class="form-select">
          <option value="">Select Gender</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <button type="button" id="next1" class="btn theme-btn w-100">Next</button>
      <span id="back0" class="btn btn-link mt-3"> <i class="categories-icon" data-feather="arrow-left-circle"></i> &nbsp; Go Back </span>
    </div>



    <div class="custom-container" id="step2" style="display: none;">
      <div class="form-group">
        <div class="upload-image rounded-image">
          <input class="form-control upload-file" accept="image/*" id="uploadFile" type="file" name="file" class="img">
          <i id='imagePreview' class="imagePreview upload-icon" data-feather="plus"></i>
        </div>
      </div>
      <h3 class="info-id" id="ids">To confirm your information, upload one of your KYC document like BVN, NIN, VIN or Int. Passport.</h3>

      <div class="form-group">
        <div class="upload-image rounded-image">
          <input class="form-control upload-file" accept="image/*" id="uploadFile1" type="file" name="file1" class="img">
          <i id="imagePreview1" class="imagePreview upload-icon" data-feather="camera"></i>
        </div>
      </div>

      <h3 class="info-id border-0 pb-0" id="selfi">To verify your details, activate your front camera and take a selfie.</h3>
      <button type="button" id="next2" class="btn theme-btn w-100">Next</button>
      <a href="#" id="back1" class="btn btn-link mt-3"> <i class="categories-icon" data-feather="arrow-left-circle"></i> &nbsp; Go Back </a>
    </div>

    <div class="custom-container" id="step3" style="display: none;">
      <div class="create-pin">
        <div class="form-group">
          <h5 id="ozi">Enter your transaction pin, which must not be shared with anyone.</h5>

          <label for="newpin" class="form-label">Confirm pin</label>
          <input type="number" class="form-control ipin" id="newpin" name="newpin" placeholder="Enter new pin" />
          <span id="pin1_msg" style="color: red;"></span>
        </div>
        <div class="form-group">
          <label for="confirmpin" class="form-label">Confirm pin</label>
          <input type="number" class="form-control ipin" id="confirmpin" placeholder="Re-enter new pin" />
          <span id="pin2_msg" style="color: red;"></span>
        </div>

        <div class="remember-option mt-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="i_check" checked />
            <label class="form-check-label" for="i_check">I agree to all terms & condition</label>
          </div>
        </div>

      </div>
      <button type="submit" id="sfBtn1" class="btn theme-btn w-100">Finish</button>
      <span id="back2" class="btn btn-link mt-3"> <i class="categories-icon" data-feather="arrow-left-circle"></i> &nbsp; Go Back </span>
    </div>
    <h4 class="signup">Already have an account ?<a href="/signin"> Sign in</a></h4>
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
  <script src="/public/v1/assets/js/api/signup.js"></script>
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


    const eye2 = document.querySelector(".feather-eye2");
    const eyeoff2 = document.querySelector(".feather-eye-off2");
    const passwordField2 = document.getElementById("password2");
    eyeoff2.style.display = "none";
    eye2.style.display = "block";

    eyeoff2.addEventListener("click", () => {
      eyeoff2.style.display = "none";
      eye2.style.display = "block";
      passwordField2.setAttribute('type', 'password');
    });
    eye2.addEventListener("click", () => {
      eye2.style.display = "none";
      eyeoff2.style.display = "block";
      passwordField2.setAttribute('type', 'text');
    });
  </script>
</body>

</html>