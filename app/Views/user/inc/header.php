 <!-- Preloader-->
 <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only"></div>
        </div>
    </div>
    <?php foreach ($infos as $key => $info) {} ?>
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container h-100 d-flex align-items-center justify-content-between d-flex rtl-flex-d-row-r">
            <!-- Logo Wrapper -->
            <div class="logo-wrapper"><a href="/user/dashboard"><img src="/public/api/img/logo2.png" style="width: 70%;"
                        alt=""></a></div>
            <div class="navbar-logo-container d-flex align-items-center">
                <!-- Cart Icon -->
                <div class="cart-icon-wrap"><a href="/user/dashboard/cart"><i
                            class="ti ti-basket"></i><span id="counter">0</span></a></div>
                <!-- User Profile Icon -->
                <div class="user-profile-icon ms-2"><a href="/user/dashboard/profile"><img
                            src="/public/v1/assets/images/uploads/<?=$info->user_passport?>" alt=""></a></div>
                <!-- Navbar Toggler -->
                <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                    aria-controls="suhaOffcanvas">
                    <div><span></span><span></span><span></span></div>
                </div>
            </div>
        </div>
    </div>