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
<style>
.modal-header {
    border-bottom: 1px solid #ebebeb;
}

.modal-footer {
    border-top: 1px solid #ebebeb;
}


.cs-newsletter-form .modal-body {
    padding: 2rem;
}

.add-new-contact-modal .modal-body textarea.form-control {
    min-height: 90px;
}

/* :: Modal */
.modal-content {
    border: 0;
    border-radius: 0.75rem;
}

.modal.fade.bottom-align-modal {
    overflow: hidden;
}

.modal-dialog-end {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
    min-height: calc(100% - 1rem);
}

.modal.fade .modal-dialog.modal-dialog-end {
    -webkit-transform: translate(0, 50px);
    transform: translate(0, 50px);
}

.modal.show .modal-dialog.modal-dialog-end {
    -webkit-transform: none;
    transform: none;
}
</style>
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
            <div class="back-button me-2"><a href="/"><i class="ti ti-arrow-left"></i></a></div>
            <!-- Page Title-->
            <div class="page-heading">
                <h6 class="mb-0">Billing Information</h6>
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
            <?=view('user/inc/sidenav')?>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Checkout Wrapper-->
            <div class="checkout-wrapper-area py-3">
                <!-- Billing Address-->
                <div class="billing-information-card mb-3">
                    <div class="card billing-information-title-card bg-danger">
                        <div class="card-body">
                            <h6 class="text-center mb-0 text-white">Check Out</h6>
                        </div>
                    </div>
                    <div class="card user-data-card">
                        <div class="card-body">
                            <div class="single-profile-data d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center"><i
                                        class="ti ti-dollar">&#x20A6;</i><span>Total:</span></div>
                                <div class="data-content2">&#x20A6;
                                    <?php                   
                                    $ego = 0;
                                    foreach ($items as $key => $t) {                     
                                        $ego += $t['price'] * $t['qty'];                    
                                        ?>
                                    <?php } ?><span id="ini_amount"><?=number_format($ego,2)?></span></div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Shipping Method Choose-->
                <div class="shipping-method-choose mb-3">
                    <div class="card shipping-method-choose-title-card bg-success">
                        <div class="card-body">
                            <h6 class="text-center mb-0 text-white">Mode Of Payment</h6>
                        </div>
                    </div>
                    <div class="card shipping-method-choose-card">
                        <div class="card-body">
                            <div class="shipping-method-choose">
                            <form id="my_Form">
                                <ul class="ps-0">
                                    <li>
                                        <input id="once" type="radio" value="once" name="pay_method" checked>
                                        <label for="once">Once payment<span>(Pay now and clear your
                                                balance)</span></label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input id="daily" type="radio" value="daily" name="pay_method">
                                        <label for="daily">Daily / Randomlly<span>(Pay any anount, any day and any
                                                time untill balance is cleared)</span></label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input id="installment" type="radio" value="installment" name="pay_method">
                                        <label for="installment">Installment<span>(Payment will be splited based on
                                                either weekly or in months)</span></label>
                                        <div class="check"></div>
                                    </li>
                                    <li id="option_panel" style="display: none;"> <br>
                                    <div class="color-box">
                                            <div class="shadow">
                                                <div class="note-box" style="padding:10px;">
                                                    <buton id="install1" class="btn btn-primary text-white"> Weekly Installment</buton>
                                                    <buton id="install2" class="btn btn-primary text-white pull-right"> Monthly Installment</buton>

                                                    <input type="hidden" id="jcap">
                                                    <input type="hidden" id="jvalue">
                                                    <input type="hidden" id="jamount">
                                                    
                                                </div>
                                                <div class="note-box" id="showbox_weekly" style="display: none;">
                                                    <p><small style="margin: 5px;">Please select number of weeks</small> <br>
                                                        <?php 
                                                        $j=0;
                                                        for ($i=1; $i <= 20 ; $i++) { $j = $j + 2; ?>
                                                             <button type="button" cap="weeks" value="<?=$j?>" class="btn mode_installment btn-primary text-white" style="margin: 4px;"><?=$j?></button>
                                                       <?php }
                                                        ?>                                                        
                                                    </p>
                                                </div>
                                                <div class="note-box" id="showbox_monthly" style="display: none;">
                                                <p><small style="margin: 5px;">Please select number of months</small> <br>
                                                        <?php 
                                                        $j=0;
                                                        for ($i=1; $i <= 6 ; $i++) { $j = $j + 2; ?>
                                                             <button type="button" cap="months" value="<?=$j?>" class="btn mode_installment btn-primary text-white" style="margin: 4px;"><?=$j?></button>
                                                       <?php }
                                                        ?>                                                        
                                                    </p>
                                                </div>
                                                
                                            </div>
                                        </div>                                    
                                    </li>
                                    <li style="display: none;" id="insurance_option">
                                        <div>
                                            <small>Include optional insurance? <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#bottomAlignModal">learn more</a> about Okanga
                                            insurance.</small> <br><br>
                                            <div class="card settings-card">
                                                <div class="card-body">
                                                <!-- Single Settings-->
                                                <div class="single-settings d-flex align-items-center justify-content-between">
                                                    <div class="title"><i class="ti ti-circle-check"></i><span>Include insurance now?</span></div>
                                                    <div class="data-content">
                                                    <div class="toggle-button-cover">
                                                        <div class="button r">
                                                        <input class="checkbox" id="include" name="include" type="checkbox">
                                                        <div class="knobs"></div>
                                                        <div class="layer"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                        </div>
                                    </li>
                                    <li>
                                    <div style="text-align:center; margin:10px; padding-bottom:10px;" id="recordMsg"></div>
                                    </li>
                                </ul>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart Amount Area-->
                <div class="card cart-amount-area">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="total-price mb-0">$<span class="counter">39.84</span></h5><button
                            class="btn btn-warning text-white">Confirm &amp; Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <?=view('user/inc/footer')?>

    <!-- Bottom Align Modal -->
    <div class="modal fade bottom-align-modal" id="bottomAlignModal" tabindex="-1"
        aria-labelledby="bottomAlignModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="bottomAlignModalLabel" style="color:blue">Insurance</h6>
                    <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Okanga offers protection from non-warranty damage for 12 months from the product's
                        shipping date. Please be aware that this service incurs an extra cost of ten percent of your
                        item's purchase price.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-success" type="button" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
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
    <script src="/public/api/js/ogadan/checkout.js"></script>

</body>

</html>