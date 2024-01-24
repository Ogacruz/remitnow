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
                        <h4 class="heading mb-0">Courses</h4>
                        <div>
                            <a class="btn btn-primary btn-sm me-1" data-bs-toggle="offcanvas" href="#offcanvasExample1"
                                role="button" aria-controls="offcanvasExample1">+ Add Course</a>

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
                                            <th>Program Code</th>
                                            <th>Program Name</th>
                                            <th> Duration</th>
                                            <th>Program Group</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($courses == false) { ?>
                                        <tr>

                                            <td colspan="10">
                                                <div class="alert alert-warning">Record not found</div>
                                            </td>
                                        </tr>
                                        <?php } else {
                                            $i = 0;
                                            foreach ($courses as $key => $course) {
                                                $i++; ?>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                                        required="">
                                                    <label class="form-check-label" for="customCheckBox2"></label>
                                                </div>
                                            </td>
                                            <td><?= $i ?></td>
                                            <td><?= $course->course_code ?></td>
                                            <td><?= $course->course_name ?></td>
                                            <td><?= $course->course_duration ?></td>
                                            <td><?= $course->businesscategory_name ?></td>

                                            <td class="pe-0"><?php
                                                                    if ($course->course_status == 0) { ?>
                                                <span class="badge badge-danger light border-0 badge-sm">Blocked</span>
                                                <?php } else { ?>
                                                <span
                                                    class="badge badge-success light border-0 badge-sm">Activated</span>
                                                <?php } ?>
                                            </td>

                                            <td><button id="<?= $course->courseID ?>"
                                                    course_code="<?= $course->course_code ?>"
                                                    course_name="<?= $course->course_name ?>"
                                                    course_duration="<?= $course->course_duration ?>"
                                                    catname="<?= $course->businesscategory_name ?>"
                                                    catid="<?= $course->businesscategoryID ?>"
                                                    class="btn btn-info btn-sm editBTN light border-0"><span
                                                        class="fa fa-edit"></span></button></td>
                                            <td>
                                                <?php
                                                        if ($course->course_status == 0) { ?>
                                                <button id="<?= $course->courseID ?>"
                                                    class="btn btn-success btn-sm activate light border-0"> <span
                                                        class="fa fa-check"></span></button>
                                                <?php } else { ?>
                                                <button id="<?= $course->courseID ?>"
                                                    class="btn btn-danger ban btn-sm  light border-0"> <span
                                                        class="fa fa-ban"></span></button>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php }
                                        } ?>

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
            <h5 class="modal-title" id="#gridSystemModal1">Add New Business Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
            <form id="addForm">
                    <div class="modal-body">
                    <div class="col-xl-12 mb-6">
                            <label for="pcode" class="col-form-label">Course Code:</label>
                            <input type="text" placeholder="eg. AY/ICT/0001" class="form-control" id="pcode"
                                name="pcode">
                        </div>
                        <div class="col-xl-12 mb-6">
                            <label for="coursename" class="col-form-label">Course Name:</label>
                            <input type="text" placeholder="eg. Graphic Design" class="form-control" id="coursename"
                                name="coursename">
                        </div>
                        <div class="col-xl-12 mb-6">
                            <label for="duration" class="col-form-label">Program Duration:</label>
                            <select class="form-control" name="duration" id="duration">
                                <option value="">Select Duration</option>
                                <option value="3 Months">3 Months</option>
                                <option value="4 Months">4 Months</option>
                                <option  value="6 Months">6 Months</option>
                            </select>
                        </div>
                        <div class="col-xl-12 mb-6">
                            <label for="grouptitle" class="col-form-label">Course Name:</label>
                            <select class="form-control" name="grouptitle" id="grouptitle">
                                <option value="">Select group title</option>
                                <?php  
                            foreach ($bizgroups as $key => $bg) {?>
                                <option value="<?=$bg->businesscategoryID?>"><?=$bg->businesscategory_name?></option>
                                <?php }                            
                            ?>
                            </select>
                        </div>
                    </div>
                   
                    <div>
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-danger btn-sm light me-1">Cancel</button>
                    <button type="submit" id="addBTN" class="btn btn-primary btn-sm me-1">Save Now</button>
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


    <!-- Varying modal content -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varyingcontentModalLabel">Update Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="pcode" class="col-form-label">Program Code:</label>
                            <input type="hidden" id="cid" name="cid">
                            <input type="text" placeholder="AY/ICT/0001" readonly class="form-control" id="pcode1"
                                name="pcode1">
                        </div>
                        <div class="mb-3">
                            <label for="coursename1" class="col-form-label">Program Title:</label>
                            <input type="text" placeholder="Graphic Design" class="form-control" id="coursename1"
                                name="coursename1">
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="col-form-label">Program Duration:</label>
                            <select class="form-control" name="duration1" id="duration1">
                                <option id="newduration"></option>
                                <option value="">Select Duration</option>
                                <option value="3 Months">3 Months</option>
                                <option value="4 Months">4 Months</option>
                                <option value="6 Months">6 Months</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="grouptitle" class="col-form-label">Group Name:</label>
                            <select class="form-control" name="grouptitle1" id="grouptitle1">
                                <option id="newid"></option>
                                <option value="">Select group title</option>
                                <?php
                                foreach ($bizgroups as $key => $bg) { ?>
                                <option value="<?= $bg->businesscategoryID ?>"><?= $bg->businesscategory_name ?>
                                </option>
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="lbtn2" class="btn btn-sm btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



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

        $(document).on('click', '.editBTN', function() {

            var id = $(this).attr('id');
            var course_code = $(this).attr('course_code');
            var course_name = $(this).attr('course_name');
            var course_duration = $(this).attr('course_duration');
            var catname = $(this).attr('catname');
            var catid = $(this).attr('catid');

            $('#cid').val(id);
            $('#pcode1').val(course_code);
            $('#coursename1').val(course_name);
            $('#newduration').text(course_duration);
            $('#newduration').val(course_duration);
            $('#newid').text(catname);
            $('#newid').val(catid);

            $('#editModal').modal('show');
        });

        $(document).on('submit', '#updateForm', function(e) {
            e.preventDefault();
            var pcode1 = $('#pcode1').val();
            var coursename1 = $('#coursename1').val();
            var duration1 = $('#duration1').val();
            var grouptitle1 = $('#grouptitle1').val();

            if (pcode1 == "") {
                toastr.error("Enter the program code", "Error!", {
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
                $('#pcode1').focus();
                $('#pcode1').css('border', 'solid 0.1px red');
                return false;
            } else if (coursename1 == "") {
                toastr.error("Enter the course  title", "Error!", {
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
                $('#coursename1').focus();
                $('#coursename1').css('border', 'solid 0.1px red');
                return false;
            } else if (duration1 == "") {
                toastr.error("Select the duration", "Error!", {
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
                $('#duration1').focus();
                $('#duration1').css('border', 'solid 0.1px red');
                return false;
            } else if (grouptitle1 == "") {
                toastr.error("Select the group title", "Error!", {
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
                $('#grouptitle1').focus();
                $('#grouptitle1').css('border', 'solid 0.1px red');
                return false;
            } else {
                $("#addBTN").attr("disabled", true);
                $("#addBTN").html(
                    '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
                );
                $.ajax({
                    type: "POST",
                    url: "/admin/dashboard/doUpdateCourse",
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
                            $("#addBTN").html("Save Changes");
                            $("#addBTN").attr("disabled", false);
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


        $(document).on('click', '.addCourseBTN', function() {
            $('#addModal').modal('show');
        });

        $(document).on('submit', '#addForm', function(e) {
            e.preventDefault();
            var fdata = new FormData(this);
            var coursename = $('#coursename').val();
            var duration = $('#duration').val();
            var grouptitle = $('#grouptitle').val();
            var pcode = $('#pcode').val();

            if (pcode == "") {
               
                toastr.error("Enter the course code", "Error!", {
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
                $("#pcode").focus();
                return false;
            } else if (coursename == "") {
                
                toastr.error("Enter the course title", "Error!", {
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
                $("#coursename").focus();
                return false;
            } else if (duration == "") {
                
                toastr.error("Select the duration", "Error!", {
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
                $("#duration").focus();
                return false;
            } else if (grouptitle == "") {
                toastr.error("Select the group title", "Error!", {
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
                $("#grouptitle").focus();
                return false;
            } else {

                $("#lbtn1").attr("disabled", true);
          $("#lbtn1").html(
            '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
          );
          $.ajax({
            type: "POST",
            url: "/admin/dashboard/doAddCourse",
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
                text: "This course will  be disabled",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Am Sure!",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "/admin/dashboard/banCourse",
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
                text: "This course will be activated",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Am Sure!",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            url: "/admin/dashboard/activateCourse",
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