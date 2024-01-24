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
    <?=view('user/inc/header')?>

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
            <!-- Profile Wrapper-->
            <div class="profile-wrapper-area py-3">
                <!-- User Information-->
                <div class="card user-info-card">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="user-profile me-3"><img
                                src="/public/v1/assets/images/uploads/<?=$info->user_passport?>" alt=""></div>
                        <div class="user-info">
                            <p class="mb-0 text-dark">@<?=$info->user_code?></p>
                            <h5 class="mb-0"><?=$info->user_fullname?></h5>
                        </div>
                    </div>
                </div>
                <!-- User Meta Data-->
                <div class="card user-data-card">
                    <div class="card-body">
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-at"></i><span>AppID</span>
                            </div>
                            <div class="data-content">@<?=$info->user_code?></div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-user"></i><span>Full
                                    Name</span></div>
                            <div class="data-content"><?=$info->user_fullname?></div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-phone"></i><span>Phone</span>
                            </div>
                            <div class="data-content"><?=$info->user_phone?></div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-mail"></i><span>Email</span>
                            </div>
                            <div class="data-content"><?=$info->user_email?></div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i
                                    class="ti ti-location-pin"></i><span>Shipping:</span></div>
                            <div class="data-content"><?php if($info->user_address =='Nill'){echo"N/A";}else{ echo $info->user_address;}?></div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-star-filled"></i><span>My
                                    Orders</span></div>
                            <div class="data-content"><a class="btn btn-success btn-sm" href="/user/dashboard/my-order">View
                                    Status</a></div>
                        </div>
                        <!-- Edit Profile-->
                        <div class="edit-profile-btn mt-3"><a class="btn btn-primary w-100" href="/user/dashboard/edit-profile"><i
                                    class="ti ti-pencil me-2"></i>Edit Profile</a></div>
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