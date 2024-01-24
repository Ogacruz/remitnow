<?=view('inc/meta')?>
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
            <div class="back-button me-2"><a href="#" onclick="history.back()"><i class="ti ti-arrow-left"></i></a></div>
            <!-- Page Title-->
            <div class="page-heading">
                <h6 class="mb-0">404 Error! </h6>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas">
                <div><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
    
    <!-- Page Content Wrapper-->
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Offline Area-->
            <div class="offline-area-wrapper py-3 d-flex align-items-center justify-content-center">
                <div class="offline-text text-center"><img class="mb-4 px-4" src="/public/api/img/bg-img/no-internet.png" alt="">
                    <h5>Error Page Detected</h5>
                    <p>The requested page was not found!  Or Seems like you're offline, please check your internet connection. </p><a class="btn btn-primary" href="#" onclick="history.back()">Back Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <?=view('user/inc/footer')?>
    <!-- All JavaScript Files-->
    <script src="/public/api/js/bootstrap.bundle.min.js"></script>
    <script src="/public/api/js/jquery.min.js"></script>
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