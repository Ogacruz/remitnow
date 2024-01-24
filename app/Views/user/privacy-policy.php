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
        <div class="back-button me-2"><a href="/user/dashboard/settings"><i class="ti ti-arrow-left"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Privacy Policy</h6>
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
        <!-- Privacy Policy-->
        <div class="privacy-policy-wrapper py-3">
          <h6>PRIVACY POLICY</h6>
          <p>By using or accessing the service in any manner, you acknowledge that you accept the practices and policies outlined in this Privacy Policy, and you hereby consent that we will collect, use, and share your information in the following ways.</p>
          <h6>WHAT DATA WE COLLECT AND WHY WE COLLECT</h6>
          <p>As is true of most websites, we gather certain information (such as mobile provider, operating system, etc.) automatically and store it in log files. We use this information, which does not identify individual users, to analyze trends, to administer the website, to track users movements around the website and to gather demographic information about our user base as a whole. We may link some of this automatically-collected data to certain Personally Identifiable Information.</p>
          <h6>PERSONALLY IDENTIFIABLE INFORMATION</h6>
          <p>If you are a Client, when you register with us via our Website, we will ask you for some personally identifiable information, such as your first and last name, company name, email address, billing address, and credit card information. You may review and update this personally identifiable information in your profile by logging in and editing such information on your dashboard. If you decide to delete all of your information, we may cancel your account. We may retain an archived copy of your records as required by law or for reasonable business purposes.</p>
          <p>Due to the nature of the Service, except to assist Clients with certain limited technical problems or as otherwise legally compelled, we will not access any of the Content that you upload to the Service.</p>
          <p>Some Personally Identifiable Information may also be provided to intermediaries and third parties who assist us with the Service, but who may make no use of any such information other than to assist us in providing the Service. Except as otherwise provided in this Privacy Policy, however, we will not rent or sell your Personally Identifiable Information to third parties.</p>
          <h6>USE OF INFORMATION</h6>
          <p>For our Clients, we use personal information mainly to provide the Services and contact our Clients regarding account activities, new versions, and product offerings, or other communications relevant to the Services. We do not sell or share any personally identifiable or other information of End Users to any third parties, except, of course, to the applicable Client whose website you are using.</p>
          <p>If you contact us by email or by filling out a registration form, we may keep a record of your contact information and correspondence and may use your email address, and any information that you provide to us in your message, to respond to you. In addition, we may use the personal information described above to send you information regarding the Service. If you decide at any time that you no longer wish to receive such information or communications from us, email us at and request to be removed from our list. The circumstances under which we may share such information with third parties are described below in “Complying with Legal Process”.</p>
          <h6>STORAGE AND SECURITY OF INFORMATION</h6>
          <p class="mb-0">It's operates secure data networks protected by industry-standard firewalls and password protection systems. Our security and privacy policies are periodically reviewed and enhanced as necessary, and only authorized individuals have access to the information provided by our Clients.</p>
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