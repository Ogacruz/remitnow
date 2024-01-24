<?= view('user/inc/meta') ?>
<?php foreach ($infos as $key => $info) {}
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
    <!-- Preloader-->
    <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only"></div>
        </div>
    </div>
    <?php 
    if($products == false){
      $cat_title = "Not Found";
    }else{
        $cat_title  = "Products";

    }
    ?>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
        <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
            <!-- Back Button-->
            <div class="back-button me-2"><a href="/user/dashboard"><i class="ti ti-arrow-left"></i></a></div>
            <!-- Page Title-->
            <div class="page-heading">
                <h6 class="mb-0"><?=$cat_title?></h6>
            </div>
            <!-- Filter Option-->
            <div class="filter-option ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaFilterOffcanvas"
                aria-controls="suhaFilterOffcanvas"><i class="ti ti-adjustments-horizontal"></i></div>
        </div>
    </div>

    <?=view('user/inc/filter')?>

    <div class="page-content-wrapper">
        <!-- Catagory Banner-->
        <div class="pt-3">
            <div class="container">
                <div class="catagory-single-img" style="background-image: url('/public/api/img/bg-img/5.jpg')"></div>
            </div>
        </div>
        <!-- Catagory Products -->
        <div class="top-products-area py-3">
            <div class="container">
                <div class="section-heading rtl-text-right">
                    <h6>Home / <?=$cat_title?></h6>
                </div>
                <div class="row g-2 rtl-flex-d-row-r">
                    <!-- Product Card -->
                    <?php

                    if($products == false){?>

                    <div class="col-12">
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="alert alert-danger">Product not found in this category</div>
                            </div>
                        </div>
                    </div>

                    <?php  }else{

                    foreach ($products as $key => $t) { ?>

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
                                <a class="product-thumbnail d-block"
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
                                <!-- Add to Cart -->
                                <button 
                                        product_id="<?=$t->productID?>"
                                        product_name="<?=$t->product_name?>"
                                        product_price="<?=$t->product_current_price?>"
                                         product_image="/public/api/img/product/new/<?=$row->file_name?>"
                                         class="btn addToCart btn-success btn-sm"><i class="ti ti-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php }}
                    ?>
                    <!-- Product Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <?= view('user/inc/footer') ?>
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