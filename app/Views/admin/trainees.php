<?= view('admin/inc/meta') ?>

<link href="/public/v2/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="/public/v2/cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">

<!-- tagify-css -->
<link href="/public/v2/vendor/tagify/dist/tagify.css" rel="stylesheet">

<!-- Style css -->
<link href="/public/v2/css/style.css" rel="stylesheet">

<style>
div.dataTables_wrapper div.dataTables_processing {
    position: fixed !important;
}
</style>

</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">

    <?= view('admin/inc/nav') ?>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Chat box start
        ***********************************-->
    <?= view('admin/inc/chat') ?>
    <!--**********************************
            Chat box End
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <?= view('admin/inc/header') ?>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    <?= view('admin/inc/sidebar') ?>
    <!--**********************************
            Sidebar end
        ***********************************-->
    <!--**********************************
            Content body start
        ***********************************
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Dashboard</h5>
                </li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                                stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Apps </a>
                </li>
            </ol>

        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12 active-p">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Filter</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form id="filterForm">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <label class="form-label mt-3">Batch<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="batch" id="batch">
                                                            <option value="all">All</option>
                                                            <option value="Batch 1">Batch 1</option>
                                                            <option value="Batch 2">Batch 2</option>
                                                            <option value="Batch 3">Batch 3</option>
                                                            <option value="Batch 4">Batch 4</option>
                                                            <option value="Batch 5">Batch 5</option>
                                                            <option value="Batch 6">Batch 6</option>
                                                            <option value="Batch 7">Batch 7</option>
                                                            <option value="Batch 8">Batch 8</option>
                                                            <option value="Batch 9">Batch 9</option>
                                                            <option value="Batch 10">Batch 10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <label class="form-label mt-3">Gender<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="sex" id="sex">
                                                            <option value="all">All</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-2">
                                                    <label class="form-label mt-3">Category<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <select name="businesscategory" id="businesscategory"
                                                            class="form-control businesscategory select2"
                                                            style="width: 100%;">
                                                            <option value="all">All</option>
                                                            <?php
                                                            foreach ($bizgroups as $key => $bg) { ?>
                                                            <option value="<?= $bg->businesscategoryID ?>">
                                                                <?= $bg->businesscategory_name ?>
                                                            </option>
                                                            <?php }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <label class="form-label mt-3">Course<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <select name="programmes" id="programmes" style="width: 100%; "
                                                            class="form-control select2">
                                                            <option value="all">All</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <label class="form-label mt-3">Status<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="status" id="status">
                                                            <option value="all">All</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Pending</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <label class="form-label mt-3"><br></label>
                                                    <div class="input-group">
                                                        <button id="sortBtn" type="submit"
                                                            class="btn btn-sm btn-primary"><span
                                                                class="fa fa-search"></span> Search Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="heading mb-0">All Trainees</h4>

                        <div>

                            <button class="btn btn-sm btn-primary"><span class="fa fa-filter"></span> Filter By
                                Batch</button>
                            <a class="btn btn-primary btn-sm me-1" data-bs-toggle="offcanvas" href="#offcanvasExample1"
                                role="button" aria-controls="offcanvasExample1">+ Add Trainee</a>
                        </div>
                    </div>
                    <div class="card h-auto">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1 shorting dt-filter exports">
                                <div class="tbl-caption">
                                </div>
                                <table id="contacts-tbl1" class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check custom-checkbox ms-0">
                                                    <input type="checkbox" class="form-check-input" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>S/N</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Batch</th>
                                            <th>Status</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="details">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--**********************************
            Content body end
        ***********************************-->


    <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
        <div class="offcanvas-header">
            <h5 class="modal-title" id="#gridSystemModal1">Add Trainee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <form id="teamForm">
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input id="fname" name="fname" type="text" class="form-control "
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mname">Middle Name</label>
                                        <input id="mname" name="mname" type="text" class="form-control"
                                            placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input id="lname" name="lname" type="text" class="form-control"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sex">Gender</label>
                                        <select type="text" id="sex" name="sex" class="form-control">
                                            <option value="">Select your gender</option>
                                            <option value='Male'>Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="ms">Marital Status</label>
                                        <select type="text" id="ms" name="ms" class="form-control">
                                            <option value="">Select your marital status</option>
                                            <option value='Single'>Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widow">Widow</option>
                                            <option value="Widower">Widower</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Date Of Birth</label>
                                        <input id="dob" name="dob" type="date" class="form-control picker"
                                            placeholder="11/12/1982">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input id="phone" name="phone" type="text" class="form-control"
                                            placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input id="email" name="email" type="text" class="form-control"
                                            placeholder="E-mail">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Passport</label>
                                <input class="form-control form-control-sm" type="file" id="file" name="file">

                            </div>

                            <hr class="my-15">
                            <h4 class="box-title text-info"><i class="ti-briefcase mr-15"></i> Business
                                Information</h4>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company">Business Name </label>
                                        <input id="company" name="company" type="text" class="form-control"
                                            placeholder="eg. Elma Computer Center">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="businesscategory">Business Category </label>
                                        <select name="businesscategory" id="businesscategory"
                                            class="form-control businesscategory select2" style="width: 100%;">
                                            <option value="">Select business category</option>
                                            <?php
											foreach ($bizgroups as $key => $bg) { ?>
                                            <option value="<?=$bg->businesscategoryID?>"><?=$bg->businesscategory_name?>
                                            </option>
                                            <?php }
											?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="courses">Courses </label>
                                        <select name="courses" id="courses" style="width: 100%; "
                                            class="form-control select2">
                                            <option value="">Select a program here</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="seat">No Of Student You Can <i class="fa fa-exclamation-triangle"
                                                aria-hidden="true"></i></label>
                                        <input type="number" id='seat' class="form-control" min="1" name="seat"
                                            require="" placeholder="Number students your center can hold">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="location">Business Location/Address </label>
                                        <input id="location" name="location" type="text" class="form-control"
                                            placeholder="eg. No 120B FF, Ike Street Onitsha">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="landmark">Land Mark </label>
                                        <input id="landmark" name="landmark" type="text" class="form-control"
                                            placeholder="Location land mark">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">State </label>
                                        <select name="ostate" id="ostate" class="form-control">
                                            <option value="">Select business state</option>
                                            <option value="Anambra">Anambra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lga">LGA </label>
                                        <select name="lga" id="lga" class="form-control select2" style="width: 100%;">
                                            <option value="">Select your 1 Youth 2 Skills LGA...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bank"> Bank Name</label>
                                        <select name="bank" id="bank" class="form-control select2"
                                            style="width: 100%; ">
                                            <option value="">Select your bank...</option>
                                            <option>Access Bank</option>
                                            <option>Citi Bank</option>
                                            <option>Coronation Merchant Bank</option>
                                            <option>EcoBank</option>
                                            <option>FBNQUEST Merchant Bank</option>
                                            <option>Fidelity Bank</option>
                                            <option>First Bank of Nigeria</option>
                                            <option>First City Monument Bank (FCMB)</option>
                                            <option>FSDH Merchant Bank</option>
                                            <option>Globus Bank</option>
                                            <option>Greenwich Merchant Bank</option>
                                            <option>Guarantee Trust Bank (GTB)</option>
                                            <option>Heritage Bank</option>
                                            <option>Jaiz Bank</option>
                                            <option>Keystone Bank</option>
                                            <option>Lotus Bank</option>
                                            <option>Nova Merchant Bank </option>
                                            <option>Polaris Bank</option>
                                            <option>Providus Bank</option>
                                            <option>Rand Merchant Bank </option>
                                            <option>Stanbic IBTC Bank</option>
                                            <option>Standard Chartered Bank</option>
                                            <option>Sterling Bank </option>
                                            <option>Suntrust Bank </option>
                                            <option>Taj Bank</option>
                                            <option>Titan Trust Bank</option>
                                            <option>Union Bank Plc</option>
                                            <option>United Bank for Africa (UBA)</option>
                                            <option>Unity Bank</option>
                                            <option>Wema Bank</option>
                                            <option>Zenith Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="accno">Account Number </label>
                                        <input id="accno" name="accno" type="text" class="form-control"
                                            placeholder="Enter your 10 digit acc/no">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="acctype">Account Type </label>
                                        <select name="acctype" id="acctype" class="form-control">
                                            <option value="">Select your account type...</option>
                                            <option value="Saving">Saving Account</option>
                                            <option value="Current">Current Account</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="lbtnx" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table" border="1" style="width:100%">
                        <thead class="bg-primary">
                            <tr>
                                <th colspan="2" id="centerid">
                                    <center>Master Trainers Information</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="2" id="piv"></th>
                            </tr>
                            <tr>
                                <th>Business Name</th>
                                <td id="vbname"></td>
                            </tr>
                            <tr>
                                <th>Business Location</th>
                                <td id="vblocation"></td>
                            </tr>
                            <tr>
                                <th>LGA</th>
                                <td id="vlga"></td>
                            </tr>
                            <tr>
                                <th>Full Name</th>
                                <td id="vfullname"></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td id="vsex"></td>
                            </tr>
                            <tr>
                                <th>Date Of Birth</th>
                                <td id="vdob"></td>
                            </tr>
                            <tr>
                                <th>Marital Status</th>
                                <td id="vms"></td>
                            </tr>
                            <tr>
                                <th>Phone No</th>
                                <td id="vphone"></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td id="vemail"></td>
                            </tr>
                            <tr>
                                <th>Bank</th>
                                <td id="vbank"></td>
                            </tr>
                            <tr>
                                <th>AccNo</th>
                                <td id="vaccno"></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td id="vtype"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm light" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <!--**********************************
            Footer start
        ***********************************-->
    <?= view('admin/inc/footer') ?>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/public/v2/vendor/global/global.min.js"></script>
    <script src="/public/v2/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- Dashboard 1 -->
    <script
        src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/jquery.dataTables.min.js">
    </script>
    <script
        src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/dataTables.buttons.min.js">
    </script>
    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/buttons.html5.min.js">
    </script>
    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/jszip.min.js">
    </script>
    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/js/plugins-init/datatables.init.js">
    </script>

    <!-- Apex Chart -->
    <script src="/public/v2/vendor/tagify/dist/tagify.js"></script>
    <!-- Vectormap -->
    <script src="/public/v2/js/custom.js"></script>
    <script src="/public/v2/js/deznav-init.js"></script>
    <script src="/public/v2/js/demo.js"></script>
    <script src="/public/v2/js/styleSwitcher.js"></script>

    <script src="/public/v2/js/auth/statelga.js"></script>

    <link href="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- <script src="/public/v2/js/plugins-init/sweetalert.init.js"></script> -->
    <script src="/public/v2/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/v2/js/plugins-init/toastr-init.js"></script>


    </style>
    <script>
    $(document).ready(function() {

        $(document).on('submit', '#filterForm', function(e) {
            e.preventDefault();
            $('#contacts-tbl1 tbody').html('');
            getTrainees();
        });


      
        $(document).on("click", ".ban", function(e) {
            var id = $(this).attr("id");
            Swal.fire({
                title: "Are you sure?",
                text: "This trainee will not be able to login into the dashboard again",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Am Sure!",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "/admin/dashboard/banTrainee",
                            type: "POST",
                            data: "id=" + id,
                            dataType: "json",
                        }).done(function(content) {
                            if (content.status == "success") {
                                Swal.fire("Banned!", content.message,
                                    "success");
                                var url = location.reload();
                                setTimeout(function() {
                                  window.location.href = url;
                                }, 1500);
                            } else {
                                Swal.fire("Oops...", content.message,
                                    "error");
                            }
                        }).fail(function() {
                            Swal.fire("Oops...",
                                "Something went wrong with ajax !",
                                "error");
                        });
                    });
                },
            });
        });

        $(document).on("click", ".activate", function(e) {
            var id = $(this).attr("id");
            Swal.fire({
                title: "Are you sure?",
                text: "This trainee will be able to login into the dashboard again",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Am Sure!",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "/admin/dashboard/activateTrainee",
                            type: "POST",
                            data: "id=" + id,
                            dataType: "json",
                        }).done(function(content) {
                            if (content.status == "success") {
                                Swal.fire("Activated!", content.message,
                                    "success");
                                var url = location.reload();
                                setTimeout(function() {
                                  window.location.href = url;
                                }, 1500);
                            } else {
                                Swal.fire("Oops...", content.message,
                                    "error");
                            }
                        }).fail(function() {
                            Swal.fire("Oops...",
                                "Something went wrong with ajax !",
                                "error");
                        });
                    });
                },
            });
        });


        function getTrainees() {

            $('#contacts-tbl1').DataTable({
                "ajax": {
                    "url": "<?=base_url()?>admin/dashboard/fetchTraineess",
                    "type": "post",
                    "data":{
                        batch:$('#batch').val(),
                        sex:$('#sex').val(),
                        businesscategory:$('#businesscategory').val(),
                        programmes:$('#programmes').val(),
                        status:$('#status').val()
                    },
                },
                bDestroy: true,
                pagingType: 'numbers',
                "language": {
                    "loadingRecords": "<span class='fa-stack fa-lg'>\n\
                            <i class='fa fa-spinner fa-spin fa-stack-2x fa-fw'></i>\n\
                       </span>&emsp;Processing ..."
                },

            });
        }




        $(document).on('change', '.businesscategory', function() {
            var bcid = $('.businesscategory').val();
            if (bcid != "") {
                $.ajax({
                    method: "post",
                    url: "/admin/dashboard/getgroup/courses",
                    type: 'POST',
                    cache: 'false',
                    dataType: 'json',
                    data: {
                        bcid: bcid,
                    },
                    success: function(data) {
                        if (data) {

                            var html = '';
                            var i;
                            for (i = 0; i < data.length; i++) {
                                html += '<option value=' + data[i].courseID + '>' + data[i]
                                    .course_name + '</option>';
                            }
                            $('#programmes').html(
                                '<option value="all"> All</option>' +
                                html);
                        } else {
                            $('#programmes').html('<option value="all"> All</option>');
                        }
                    }
                });
                $('#programmes').html('<option value="all"> All</option>');
            }
        });

       


    });
    </script>

</body>

</html>