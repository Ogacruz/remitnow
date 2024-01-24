<?= view('admin/inc/meta') ?>

<link href="/public/v2/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">

<!-- tagify-css -->
<link href="/public/v2/vendor/tagify/dist/tagify.css" rel="stylesheet">

<!-- Style css -->
<link href="/public/v2/css/style.css" rel="stylesheet">

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
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="heading mb-0">Property Category</h4>
                        <div>
                            <a class="btn btn-primary btn-sm me-1" data-bs-toggle="offcanvas" href="#offcanvasExample1"
                                role="button" aria-controls="offcanvasExample1">+ Add Category</a>

                        </div>
                    </div>
                    <div class="card h-auto">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1 shorting dt-filter exports">
                                <div class="tbl-caption">
                                </div>
                                <table id="contacts-tbl" class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check custom-checkbox ms-0">
                                                    <input type="checkbox" class="form-check-input" id="checkAll"
                                                        required="">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>

                                            <th>S/N</th>
                                            <th>Image</th>
                                            <th> Category </th>
                                            <th> Listing</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                    // use App\Models\CoursesModel;

                    $i = 1;
                    foreach ($businesscat as $key => $bcg) { ?>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                                        required="">
                                                    <label class="form-check-label" for="customCheckBox2"></label>
                                                </div>
                                            </td>
                                            <td><?= $i++ ?></td>
                                            <td><img src="/public/api/img/core-img/<?=$bcg->businesscategory_image?>" style="width: 40px;" alt=""></td>
                                            <td><?= $bcg->businesscategory_name ?></td>
                                            <td>232
                                            </td>
                                            <td><?= $bcg->businesscategory_date ?></td>

                                            <td class="pe-0"><?php
                                          if ($bcg->businesscategory_status == 0) { ?>
                                                <span class="badge badge-danger light border-0 badge-sm">Blocked</span>
                                                <?php } else { ?>
                                                <span
                                                    class="badge badge-success light border-0 badge-sm">Activated</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a href="/business/group/dashboard/<?= $bcg->businesscategoryID ?>/get-courses"
                                                    class="btn btn-primary btn-sm searchBtn light border-0"><span
                                                        class="fa fa-eye"></span></a>
                                            </td>
                                            <td>
                                                <button id="<?= $bcg->businesscategoryID ?>"
                                                    title="<?= $bcg->businesscategory_name ?>" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1"
                                                    class="btn btn-info btn-sm editNowBtn light border-0"><span
                                                        class="fa fa-edit"></span></button>
                                            </td>
                                            <td><?php
                            if ($bcg->businesscategory_status == 0) { ?>
                                                <button id="<?= $bcg->businesscategoryID ?>"
                                                    class="btn btn-success btn-sm activate light border-0"> <span
                                                        class="fa fa-check"></span></button>
                                                <?php } else { ?>
                                                <button id="<?= $bcg->businesscategoryID ?>"
                                                    class="btn btn-danger ban btn-sm  light border-0"> <span
                                                        class="fa fa-ban"></span></button>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php }
                    ?>
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
            <h5 class="modal-title" id="#gridSystemModal1">Add Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <form id="saveForm">
                    <div class="row">
                        <div class="col-xl-12 mb-6">
                            <label for="bizcat" class="form-label"> Category Title<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="bizcat" name="bizcat" placeholder="Title">
                        </div><br>
                        <div class="col-xl-12 mb-6 mt-6" >
                            <label for="file" class="form-label"> Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="file">
                        </div>
                    </div> <br>
                    <div>
                        <button type="reset" class="btn btn-danger btn-sm light me-1">Cancel</button>
                        <button type="submit" id="lbtn1" class="btn btn-primary btn-sm me-1">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="form-label">Business Category Title<span
                                        class="text-danger">*</span></label>
                                <input type="hidden" id="bcid" name="bcid">
                                <input type="text" id="ntitle" name="ntitle" class="form-control"
                                    placeholder="General Course">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="lbtn2" class="btn btn-sm btn-primary">Save changes</button>
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


    <link href="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/public/v2/js/plugins-init/sweetalert.init.js"></script>
    <script src="/public/v2/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/v2/js/plugins-init/toastr-init.js"></script>

    <script>
    $(document).ready(function() {

        $(document).on('click', '.editNowBtn', function() {
            $('#bcid').val($(this).attr('id'));
            $('#ntitle').val($(this).attr('title'));
        });

        $(document).on('submit', '#editForm', function(e) {
            e.preventDefault();
            var ntitle = $('#ntitle').val();
            if (ntitle == "") {
                toastr.error("Enter the business category title", "Error!", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1,
                });
                $('#ntitle').focus();
                $('#ntitle').css('border', 'solid 0.1px red');
                return false;
            } else {
                $("#lbtn2").attr("disabled", true);
                $("#lbtn2").html(
                    '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
                );
                $.ajax({
                    type: "POST",
                    url: "/admin/dashboard/update-biz-cat",
                    cache: false,
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    dataType: "json",
                    success: function(content) {
                        if (content.status == "success") {
                            toastr.success(content.message, "Saved!", {
                                positionClass: "toast-top-right",
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1,
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 300);
                        } else {
                            $("#lbtn2").html("Save Changes");
                            $("#lbtn2").attr("disabled", false);
                            toastr.error(content.message, "Failed!", {
                                positionClass: "toast-top-right",
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1,
                            });
                        }
                    },
                });
            }

        });

        $(document).on('submit', '#saveForm', function(e) {
            e.preventDefault();
            var bizcat = $('#bizcat').val();
            var file = $('#file').val();
            if (bizcat == "") {
                toastr.error("Enter the business category title", "Error!", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1,
                });
                $('#bizcat').focus();
                $('#bizcat').css('border', 'solid 0.1px red');
                return false;
            } else if (file == "") {
                toastr.error("Select the category image", "Error!", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1,
                });
                $('#file').focus();
                $('#file').css('border', 'solid 0.1px red');
                return false;
            } else {
                $("#lbtn1").attr("disabled", true);
                $("#lbtn1").html(
                    '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
                );
                $.ajax({
                    type: "POST",
                    url: "/admin/dashboard/add-biz-cat",
                    cache: false,
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    dataType: "json",
                    success: function(content) {
                        if (content.status == "success") {
                            toastr.success(content.message, "Saved!", {
                                positionClass: "toast-top-right",
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1,
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 300);
                        } else {
                            $("#lbtn1").html("Save");
                            $("#lbtn1").attr("disabled", false);
                            toastr.error(content.message, "Failed!", {
                                positionClass: "toast-top-right",
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1,
                            });
                        }
                    },
                });
            }

        });


        $(document).on("click", ".ban", function(e) {
            var id = $(this).attr("id");
            Swal.fire({
                title: "Are you sure?",
                text: "This business group will be disabled",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Am Sure!",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "/admin/dashboard/banBusinessGroup",
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
                text: "This business group will be actived",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Am Sure!",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "/admin/dashboard/activateBusinessGroup",
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




    });
    </script>


</body>

</html>