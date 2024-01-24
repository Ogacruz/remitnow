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
            <div class="back-button me-2 me-2"><a href="/user/dashboard/profile"><i class="ti ti-arrow-left"></i></a>
            </div>
            <!-- Page Title-->
            <div class="page-heading">
                <h6 class="mb-0">Edit Profile</h6>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas">
                <div><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
        aria-labelledby="suhaOffcanvasLabel">
        <!-- Close button-->
        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <!-- Offcanvas body-->
        <div class="offcanvas-body">
            <!-- Sidenav Profile-->            
            <!-- Sidenav Nav-->
            <?=view('user/inc/sidenav')?>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Profile Wrapper-->
            <div class="profile-wrapper-area py-3">
                <!-- User Information-->
                <div class="card user-info-card">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="user-profile me-3"><img id='imgPreview' src="/public/v1/assets/images/uploads/<?=$info->user_passport?>" alt="">
                            <div class="change-user-thumb">
                                <form id="uploadForm">
                                    <input class="form-control-file" id="file" name="file" type="file">
                                    <input  class="form-control-file" id="uid" name="uid" value="<?=$info->userID?>" type="hidden">
                                    <button id="photoBtn"><i class="ti ti-pencil"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="user-info">
                            <p class="mb-0 text-dark">@<?=$info->user_code?></p>
                            <h5 class="mb-0"><?=$info->user_fullname?></h5>
                        </div>
                    </div>
                </div>
                <!-- User Meta Data-->
                <div class="card user-data-card">
                    <div class="card-body">
                        <form id="updateProfile">
                            <div class="mb-3">
                                <div class="title mb-2"><i class="ti ti-at"></i><span>AppID</span></div>
                                <input class="form-control" type="text" readonly value="<?=$info->user_code?>">
                                <input class="form-control" type="hidden" id="userid" name="userid" value="<?=$info->userID?>">
                            </div>
                            <div class="mb-3">
                                <div class="title mb-2"><i class="ti ti-user"></i><span>Full Name</span></div>
                                <input class="form-control" type="text" value="<?=$info->user_fullname?>" disabled>
                            </div>
                            <div class="mb-3">
                                <div class="title mb-2"><i class="ti ti-phone"></i><span>Phone</span></div>
                                <input class="form-control" type="text" readonly value="<?=$info->user_phone?>">
                            </div>
                            <div class="mb-3">
                                <div class="title mb-2"><i class="ti ti-mail"></i><span>Email Address</span></div>
                                <input class="form-control" type="email" readonly value="<?=$info->user_email?>">
                            </div>
                            <div class="mb-4">
                                <div class="title mb-2"><i class="ti ti-map"></i><span>Delivery State</span></div>
                                <select class="form-control  select" name="ostate" id="ostate">
                                    
                                    <option value="">Select delivery state</option>
                                    <?php 
                                        if($info->user_state !=="Nill"){?>
                                            <option selected value='<?=$info->user_state?>'><?=$info->user_state?></option>
                                        <?php   }
                                      ?>
                                    <option value='Abia'>Abia</option>
                                    <option value='Adamawa'>Adamawa</option>
                                    <option value='AkwaIbom'>AkwaIbom</option>
                                    <option value='Anambra'>Anambra</option>
                                    <option value='Bauchi'>Bauchi</option>
                                    <option value='Bayelsa'>Bayelsa</option>
                                    <option value='Benue'>Benue</option>
                                    <option value='Borno'>Borno</option>
                                    <option value='Crossrivers'>Crossrivers</option>
                                    <option value='Delta'>Delta</option>
                                    <option value='Ebonyi'>Ebonyi</option>
                                    <option value='Edo'>Edo</option>
                                    <option value='Ekiti'>Ekiti</option>
                                    <option value='Enugu'>Enugu</option>
                                    <option value='FCT'>FCT Abuja</option>
                                    <option value='Gombe'>Gombe</option>
                                    <option value='Imo'>Imo</option>
                                    <option value='Jigawa'>Jigawa</option>
                                    <option value='Kaduna'>Kaduna</option>
                                    <option value='Kano'>Kano</option>
                                    <option value='Katsina'>Katsina</option>
                                    <option value='Kebbi'>Kebbi</option>
                                    <option value='Kogi'>Kogi</option>
                                    <option value='Kwara'>Kwara</option>
                                    <option value='Lagos'>Lagos</option>
                                    <option value='Nassarawa'>Nassarawa</option>
                                    <option value='Niger'>Niger</option>
                                    <option value='Ogun'>Ogun</option>
                                    <option value='Ondo'>Ondo</option>
                                    <option value='Osun'>Osun</option>
                                    <option value='Oyo'>Oyo</option>
                                    <option value='Plateau'>Plateau</option>
                                    <option value='Rivers'>Rivers</option>
                                    <option value='Sokoto'>Sokoto</option>
                                    <option value='Taraba'>Taraba</option>
                                    <option value='Yobe'>Yobe</option>
                                    <option value='Zamfara'>Zamafara</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="title mb-2"><i class="ti ti-location"></i><span>Delivery LGA</span></div>
                                <select name="lga" id="lga" class="form-control select2" style="width: 100%;">
                                    <option value="">Select delivery lga</option>
                                    <?php 
                                        if($info->user_lga !=="Nill"){?>
                                            <option selected value='<?=$info->user_lga?>'><?=$info->user_lga?></option>
                                        <?php   }
                                      ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="title mb-2"><i class="ti ti-home"></i><span>Delivery City/Town</span></div>
                                <input class="form-control" type="text" id="city" name="city"  value="<?=$info->user_town?>">
                            </div>
                            <div class="mb-3">
                                <div class="title mb-2"><i class="ti ti-bus"></i><span>Delivery Address</span></div>
                                <input class="form-control" type="text" id="address" name="address" placeholder="Enter your delivery address" value="<?php if($info->user_address =='Nill'){echo"";}else{ echo $info->user_address;}?>">
                            </div>
                            <button class="btn btn-success w-100" id="btnUpdate" type="submit">Save All Changes</button>
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
    <script src="/public/api/js/ogadan/statelga.js"></script>
   
    <script src="/public/api/js/ogadan/edit-profile.js"></script>
  
</body>

</html>