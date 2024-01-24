<?= view('inc/meta') ?>
<?php
use App\Models\FileUploadModel;
$photo = new FileUploadModel();


?>

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

    <?= view('inc/header')  ?>

    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
        aria-labelledby="suhaOffcanvasLabel">
        <!-- Close button-->
        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <!-- Offcanvas body-->
        <div class="offcanvas-body">
            <!-- Sidenav Profile-->
            <?= view('inc/sidenav') ?>
        </div>
    </div>

    <!-- PWA Install Alert -->
    <div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true"
        data-bs-delay="5000" data-bs-autohide="true">
        <div class="toast-body">
            <div class="content d-flex align-items-center mb-2"><img src="/public/api/img/logo.jpg"
                    style="border-radius: 100px;" alt="">
                <h6 class="mb-0">Add to Home Screen</h6>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div><span class="mb-0 d-block">Click the<strong class="mx-1">Add to Home Screen</strong>button &amp; enjoy
                it like a regular app.</span>
        </div>
    </div>

    <div class="page-content-wrapper">
        <!-- Search Form-->
        <!-- Search Form-->
        <div class="container">
            <div class="search-form pt-3 rtl-flex-d-row-r">
                <form action="#" method="">
                    <input class="form-control" type="search" placeholder="Searching for property">
                    <button type="submit"><i class="ti ti-search"></i></button>
                </form>
                <!-- Alternative Search Options -->
                <div class="alternative-search-options">
                    <div class="dropdown"><a class="btn btn-primary dropdown-toggle" id="altSearchOption" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="ti ti-adjustments-horizontal"></i></a>
                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="altSearchOption">
                            <li><a class="dropdown-item" href="#"><i class="ti ti-microphone"> </i>Voice</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-layout-collage"> </i>Image</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Wrapper -->
        <div class="hero-wrapper">
            <div class="container">
                <div class="pt-3">
                    <!-- Hero Slides-->
                    <div class="hero-slides owl-carousel">
                        <!-- Single Hero Slide-->
                        <div class="single-hero-slide" style="background-image: url('/public/api/img/bg-img/1.jpg')">
                            <div class="slide-content h-100 d-flex align-items-center">
                                <div class="slide-text">
                                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                        data-duration="1000ms">Amazon Echo</h4>
                                    <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                        data-duration="1000ms">3rd Generation, Charcoal</p><a class="btn btn-primary"
                                        href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Hero Slide-->
                        <div class="single-hero-slide" style="background-image: url('/public/api/img/bg-img/2.jpg')">
                            <div class="slide-content h-100 d-flex align-items-center">
                                <div class="slide-text">
                                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                        data-duration="1000ms">Light Candle</h4>
                                    <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                        data-duration="1000ms">Now only $22</p><a class="btn btn-success" href="#"
                                        data-animation="fadeInUp" data-delay="500ms" data-duration="1000ms">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Hero Slide-->
                        <div class="single-hero-slide" style="background-image: url('/public/api/img/bg-img/3.jpg')">
                            <div class="slide-content h-100 d-flex align-items-center">
                                <div class="slide-text">
                                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                        data-duration="1000ms">Best Furniture</h4>
                                    <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                        data-duration="1000ms">3 years warranty</p><a class="btn btn-danger" href="#"
                                        data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Catagories -->
        <div class="product-catagories-wrapper py-3">
            <div class="container">
                <div class="row g-2 rtl-flex-d-row-r">
                    <!-- Catagory Card -->
                    <?php
                         if($cats == false){ ?>
                    <!-- display nothing -->
                    <?php   }else{ foreach ($cats as $key => $cat) { ?>
                    <div class="col-3">
                        <div class="card catagory-card">
                            <div class="card-body px-2">
                                <a href="/user/dashoard/catagory/<?=$cat->businesscategoryID?>/listing">
                                    <img src="/public/api/img/core-img/<?=$cat->businesscategory_image?>"
                                        alt=""><span><?=$cat->businesscategory_name?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php  }
                         }
                    ?>

                </div>
            </div>
        </div>
        <!-- Flash Sale Slide -->
       <!-- I just removed cyclone offer from here -->
        <!-- Dark Mode -->
        <div class="container">
            <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
                <p class="text-white">You can change your display to a dark background using a dark mode.</p>
                <div class="form-check form-switch mb-0">
                    <label class="form-check-label text-white h6 mb-0" for="darkSwitch">Switch to Dark Mode</label>
                    <input class="form-check-input" id="darkSwitch" type="checkbox" role="switch">
                </div>
            </div>
        </div>
        <!-- Top Products -->
        <div class="top-products-area py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
                    <h6>Top Products</h6><a class="btn btn-sm btn-light" href="/user/dashboard/products/all-top-products">View all<i
                            class="ms-1 ti ti-arrow-right"></i></a>
                </div>
                <div class="row g-2">
                    <!-- Product Card -->
                        <?php
                        foreach ($top as $key => $t) {?>
                            <div class="col-6 col-md-4">
                        <div class="card product-card">
                            <div class="card-body">
                                <!-- Badge--><?php
                                if($t->product_tag == 'new'){ ?>
                                    <span class="badge rounded-pill badge-success"><?=$t->product_tag?></span>
                               <?php }else if($t->product_tag == 'Sale'){ ?>
                                    <span class="badge rounded-pill badge-info"><?=$t->product_tag?></span>
                               <?php }else if($t->product_tag == 'On Sale'){?>
                                    <span class="badge rounded-pill badge-danger"><?=$t->product_tag?></span>
                               <?php } ?>
                                <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="ti ti-heart"> </i></a>
                                <!-- Thumbnail -->
                                <a class="product-thumbnail d-block" href="/user/dashboard/products/buy/<?=$t->productID?>/<?=strtolower(str_replace(' ','-',$t->product_name))?>">
                                <?php														
                                    $photo->where('file_product_id',$t->productID)->orderBy('fileuploadID','RANDOM')->limit(1);
                                    $query = $photo->get();
                                    if ($query->getNumRows() > 0) {
                                        foreach ($query->getResult() as $row) {?>																
                                            <img class="mb-2" src="/public/api/img/product/new/<?=$row->file_name?>" alt="">
                                    <?php	}                                        
                                    } 
                                    ?>
                                    
                                    <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                    <?php 
                                    if($t->product_isflash != ""){   $orgDate = $t->product_isflash;  
                                        $newDate = date("Y/m/d", strtotime($orgDate));    ?>
                                        <ul class="offer-countdown-timer d-flex align-items-center shadow-sm"
                                        data-countdown="<?=$newDate?> 23:59:59">
                                        <li><span class="days">0</span>d</li>
                                        <li><span class="hours">0</span>h</li>
                                        <li><span class="minutes">0</span>m</li>
                                        <li><span class="seconds">0</span>s</li>
                                    </ul>

                                   <?php } ?>
                                </a>
                                <!-- Product Title --><a class="product-title" 
                                href="/user/dashboard/products/buy/<?=$t->productID?>/<?=strtolower(str_replace(' ','-',$t->product_name))?>"><?=$t->product_name?></a>
                                <!-- Product Price -->
                                <p class="sale-price">&#x20A6;<?=number_format($t->product_current_price)?>
                                <span>&#x20A6;<?=number_format($t->product_old_price)?></span>
                                 </p>
                                <!-- Rating -->
                                <div class="product-rating"><i class="ti ti-star-filled"></i><i
                                        class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i
                                        class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i></div>
                                <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i class="ti ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                       <?php }

                        ?>
                    

                   
                </div>
            </div>
        </div>
        <!-- CTA Area -->
        <div class="container">
            <div class="cta-text dir-rtl p-4 p-lg-5">
                <div class="row">
                    <div class="col-9">
                        <h5 class="text-white">20% discount on women's care items.</h5><a class="btn btn-warning"
                            href="#">Grab this offer</a>
                    </div>
                </div><img src="/public/api/img/bg-img/make-up.png" alt="">
            </div>
        </div>
        <!-- Weekly Best Sellers-->
        <div class="weekly-best-seller-area py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
                    <h6>Weekly Best Sellers</h6><a class="btn btn-sm btn-light" href="/user/dashboard/products/all-weekly-best-sellers-products">
                        View all<i class="ms-1 ti ti-arrow-right"></i></a>
                </div>
                <div class="row g-2">
                <?php
                        foreach ($weekly as $key => $t)
                        { ?>
                        <div class="col-12">
                        <div class="card horizontal-product-card">
                            <div class="d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                        href="/user/dashboard/products/buy/<?=$t->productID?>/<?=strtolower(str_replace(' ','-',$t->product_name))?>">
                                        <?php														
                                    $photo->where('file_product_id',$t->productID)->orderBy('fileuploadID','RANDOM')->limit(1);
                                    $query = $photo->get();
                                    if ($query->getNumRows() > 0) {
                                        foreach ($query->getResult() as $row) {?>																
                                            <img class="mb-2" src="/public/api/img/product/new/<?=$row->file_name?>" alt="">
                                    <?php	}                                        
                                    } 
                                    ?>
                                    </a>
                                    <!-- Wishlist  --><a class="wishlist-btn" href="#"><i class="ti ti-heart"></i></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="/user/dashboard/products/buy/<?=$t->productID?>/<?=strtolower(str_replace(' ','-',$t->product_name))?>"><?=$t->product_name?></a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="fa fa-money"></i> &#x20A6;<?=number_format($t->product_current_price)?><span>&#x20A6;<?=number_format($t->product_old_price)?></span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="ti ti-star-filled"></i>4.88 <span
                                            class="ms-1">(39 review)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                       <?php  }
                    ?>
                    <!-- Weekly Product Card -->
                    
                </div>
            </div>
        </div>
        <!-- Discount Coupon Card-->
        <div class="container">
            <div class="discount-coupon-card p-4 p-lg-5 dir-rtl">
                <div class="d-flex align-items-center">
                    <div class="discountIcon"><img class="w-100" src="/public/api/img/core-img/discount.png" alt="">
                    </div>
                    <div class="text-content">
                        <h5 class="text-white mb-2">Get 20% discount!</h5>
                        <p class="text-white mb-0">To get discount, enter the<span class="px-1 fw-bold">GET20</span>code
                            on the checkout page.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Products Wrapper-->
        <div class="featured-products-wrapper py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
                    <h6>Featured Products</h6><a class="btn btn-sm btn-light" href="/user/dashboard/products/all-featured-products">View all<i
                            class="ms-1 ti ti-arrow-right"></i></a>
                </div>
                <div class="row g-2">
                    <!-- Featured Product Card-->
                    <?php
                        foreach ($featured as $key => $t)
                        { ?>

                    <div class="col-4">
                        <div class="card featured-product-card">
                            <div class="card-body">
                                <!-- Badge--><span class="badge badge-warning custom-badge"><i
                                        class="ti ti-star-filled"></i></span>
                                <div class="product-thumbnail-side">
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                        href="/user/dashboard/products/buy/<?=$t->productID?>/<?=strtolower(str_replace(' ','-',$t->product_name))?>">
                                        <?php														
                                    $photo->where('file_product_id',$t->productID)->orderBy('fileuploadID','RANDOM')->limit(1);
                                    $query = $photo->get();
                                    if ($query->getNumRows() > 0) {
                                        foreach ($query->getResult() as $row) {?>																
                                            <img class="mb-2" src="/public/api/img/product/new/<?=$row->file_name?>" alt="">
                                    <?php	}                                        
                                    } 
                                    ?>
                                    </a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="/user/dashboard/products/buy/<?=$t->productID?>/<?=strtolower(str_replace(' ','-',$t->product_name))?>"><?=$t->product_name?></a>
                                    <!-- Price -->
                                    <p class="sale-price">&#x20A6;<?=number_format($t->product_current_price)?><span>&#x20A6;<?=number_format($t->product_old_price)?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                       <?php  }
                    ?>                   
                   
                </div>
            </div>
        </div>
        <div class="pb-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
                    <h6>Collections</h6><a class="btn btn-sm btn-light" href="#">
                        View all<i class="ms-1 ti ti-arrow-right"></i></a>
                </div>
                <!-- Collection Slide-->
                <div class="collection-slide owl-carousel">
                    <!-- Collection Card-->
                    <div class="card collection-card"><a href="single-product.html"><img
                                src="/public/api/img/product/17.jpg" alt=""></a>
                        <div class="collection-title"><span>Women</span><span class="badge bg-danger">9</span></div>
                    </div>
                    <!-- Collection Card-->
                    <div class="card collection-card"><a href="single-product.html"><img
                                src="/public/api/img/product/19.jpg" alt=""></a>
                        <div class="collection-title"><span>Men</span><span class="badge bg-danger">29</span></div>
                    </div>
                    <!-- Collection Card-->
                    <div class="card collection-card"><a href="single-product.html"><img
                                src="/public/api/img/product/21.jpg" alt=""></a>
                        <div class="collection-title"><span>Kids</span><span class="badge bg-danger">4</span></div>
                    </div>
                    <!-- Collection Card-->
                    <div class="card collection-card"><a href="single-product.html"><img
                                src="/public/api/img/product/22.jpg" alt=""></a>
                        <div class="collection-title"><span>Gadget</span><span class="badge bg-danger">11</span></div>
                    </div>
                    <!-- Collection Card-->
                    <div class="card collection-card"><a href="single-product.html"><img
                                src="/public/api/img/product/23.jpg" alt=""></a>
                        <div class="collection-title"><span>Foods</span><span class="badge bg-danger">2</span></div>
                    </div>
                    <!-- Collection Card-->
                    <div class="card collection-card"><a href="single-product.html"><img
                                src="/public/api/img/product/24.jpg" alt=""></a>
                        <div class="collection-title"><span>Sports</span><span class="badge bg-danger">5</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->


    <?= view('inc/footer') ?>

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