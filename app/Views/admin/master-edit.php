<?= view('admin/inc/meta') ?>

<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" href="/public/v2/vendor/select2/css/select2.min.css">
<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="/public/v2/vendor/tagify/dist/tagify.css" rel="stylesheet">

<!-- Style css -->
<link href="/public/v2/css/style.css" rel="stylesheet">

</head>

<body>
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
        ***********************************-->
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
            </ol>
        </div>
        <div class="container-fluid">

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-8">
                            <form id="teamForm" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <?php foreach ($masters as $key => $master) { } ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input type="hidden" value="<?=$master->masterID?>" name="masterid" id="masterid">
                                                <input id="fname" name="fname" value="<?=$master->master_fname?>" type="text" class="form-control "
                                                    placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="mname">Middle Name</label>
                                                <input id="mname" name="mname" value="<?=$master->master_mname?>" type="text" class="form-control"
                                                    placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input id="lname" name="lname" value="<?=$master->master_lname?>" type="text" class="form-control"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="sex">Gender</label>
                                                <select type="text" id="sex" name="sex" class="form-control">
                                                    <option value="<?=$master->master_sex?>"><?=$master->master_sex?></option>
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
                                                    <option value="<?=$master->master_ms?>"><?=$master->master_ms?></option>
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
                                                <input id="dob" name="dob"  type="text" class="form-control picker"  value="<?=$master->master_dob?>" placeholder="11/12/1982">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input id="phone" value="<?=$master->master_phone?>" name="phone" type="text" class="form-control"
                                                    placeholder="Phone number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input id="email" name="email" value="<?=$master->master_email?>" type="text" class="form-control"
                                                    placeholder="E-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="businesscategory">Business Category </label>
                                                <select name="businesscategory" id="businesscategory"
                                                    class="form-control businesscategory select2" style="width: 100%;">
                                                    <option value="<?=$master->businesscategory_name?>"><?=$master->businesscategory_name?> </option>
                                                    <option value="">Select business category</option>
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

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="courses">Select a course</label>
                                                <select name="courses" id="courses" style="width: 100%; "
                                                    class="form-control select2">
                                                    <option value="<?=$master->course_name?>"><?=$master->course_name?> </option>
                                                    <option value="">Select a program here</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="seat">No of student you can</label>
                                                <input type="number" id='seat' value="<?=$master->master_seat_available?>" class="form-control" min="1" name="seat"
                                                    require="" placeholder="Number students your center can hold">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="landmark">Land Mark </label>
                                                <input id="landmark" value="<?=$master->master_business_location?>" name="landmark" type="text" class="form-control"
                                                    placeholder="Location land mark">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state">State </label>
                                                <select name="ostate" id="ostate" class="form-control">
                                                    <option value="">Select business state</option>
                                                    <option value="Anambra" selected>Anambra</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lga">LGA </label>
                                                <select name="lga" id="lga" class="form-control select2"
                                                    style="width: 100%;">
                                                    <option value="<?=$master->master_lga?>"><?=$master->master_lga?> </option>
                                                    <option value="">Select your 1 Youth 2 Skills LGA...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="bank"> Bank Name</label>
                                                <select name="bank" id="bank" class="form-control select2"
                                                    style="width: 100%; ">
                                                    <option value="<?=$master->master_bank?>"><?=$master->master_bank?> </option>
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
                                                <input id="accno" value="<?=$master->master_accno?>" name="accno" type="text" class="form-control"
                                                    placeholder="Enter your 10 digit acc/no">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="acctype">Account Type </label>
                                                <select name="acctype" id="acctype" class="form-control">
                                                <option value="<?=$master->master_account_type?>"> <?=$master->master_account_type?> </option>
                                                    <option value="">Select your account type...</option>
                                                    <option value="Saving">Saving Account</option>
                                                    <option value="Current">Current Account</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- /.box-body -->
                        </div>
                        <div class="col-xl-4">
                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">
                                        Featured Image
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                class="fal fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="cm-content-body publish-content form excerpt">
                                    <div class="card-body">
                                    <div id="imagePreview1"  style="float: right;" >
                                                <?php
                                                if($master->master_accno == ""){
                                                    $image == "/public/v2/images/masters/1702032341.png";
                                                }else{
                                                    $image = "https://youthdev.anambrastate.gov.ng/public/assets/img/master/".$master->master_passport;
                                                }                                                
                                                ?>
                                        <a href="<?=$image?>" target="_blank" class=""><img src="<?=$image?>" alt=""  style="width:125px; border-radius:10px; height:125px;"></a>
                                        </div>
                                        <div class="avatar-upload d-flex align-items-center">
                                            
                                            <div class=" position-relative ">
                                            <input type="hidden" id="mid" value="<?=$master->masterID?>" name="mid" class="form-control">
                                                <div class="avatar-preview">
                                                    <div id="imagePreview"
                                                        style="background-image: url(images/no-img-avatar.png);">
                                                    </div>
                                                </div>
                                                <div class="change-btn d-flex align-items-center flex-wrap">
                                                    <input type='file' class="form-control d-none" id="imageUpload"
                                                        name="imageUpload" accept=".png, .jpg, .jpeg">
                                                    <label for="imageUpload" class="btn btn-light ms-0">Select
                                                        Image</label>
                                                    <div id="uploaded_image"></div>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="right-sidebar-sticky">
                                <div class="filter cm-content-box box-primary">
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-footer border-0 text-end py-3 ">
                                            <button id="lbtnx" class="btn btn-primary btn-sm"> Save </button>
                                        </div>
                                    </div>
                                </div>
                                </form>
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
    <script src="/public/v2/vendor/global/global.min.js"></script>
    <script src="/public/v2/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!--select plugins-file-->
    <script src="/public/v2/vendor/select2/js/select2.full.min.js"></script>
    <script src="/public/v2/js/plugins-init/select2-init.js"></script>
    <script src="/public/v2/vendor/tagify/dist/tagify.js"></script>

    <!-- ck-editor -->
    <script src="/public/v2/vendor/ckeditor/ckeditor.js"></script>

    <!-- Dashboard 1 -->
    <script src="/public/v2/js/dashboard/cms.js"></script>
    <script src="/public/v2/js/custom.js"></script>
    <script src="/public/v2/js/deznav-init.js"></script>
    <script src="/public/v2/js/demo.js"></script>
    <script src="/public/v2/js/styleSwitcher.js"></script>

    <script src="/public/v2/js/auth/statelga.js"></script>

    <!-- Toastr -->
    <script src="/public/v2/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/v2/js/plugins-init/toastr-init.js"></script>

    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script>
    $(document).ready(function() {

        $(document).on('change',"#imageUpload",function(event) {

        event.preventDefault();

        var name = document.getElementById("imageUpload").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();

        if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
        {
        toastr.error('Invalid Image File', "Invalid!", {
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
        }); return;
        }
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imageUpload").files[0]);
        var f = document.getElementById("imageUpload").files[0];
        var fsize = f.size||f.fileSize;
        if(fsize > 2000000)
        {
        toastr.error('Image File Size is very big', "Failed!", {
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
        });return;
        }
        else
        {
        form_data.append("imageUpload", document.getElementById('imageUpload').files[0]);
        form_data.append('mid', $("#mid").val());
        $.ajax({
        url:"/admin/dashboard/master/update-image",
        method:"POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend:function(){
        $('#uploaded_image').html("<label class='text-success'><span class=\"spinner\"><i class=\"fa fa-spinner fa-spin\"></i></span> Please wait...</label>");
        setTimeout(function(){
            $('#uploaded_image').html('');
            location.reload();
        },3000);
        },   
        success:function(data)
        {
        $('#uploaded_image').html(data);
        }
        });
        }

        });
        

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
                            $('#courses').html(
                                '<option value=""> Select a program here</option>' +
                                html);
                        } else {
                            $('#courses').html('<option> Select a program here</option>');
                        }
                    }
                });
            } else {
                $('#courses').html('<option> Select a program here</option>');
            }
        });

        $(document).on('change', '#imageUpload', function() {
            var imageUpload = $('#imageUpload').val();
            if (imageUpload == "") {
                $('.avatar-preview').css('border', 'solid 0.1px red');
            } else {
                $('.avatar-preview').css('border', 'solid 0.1px #ccc');
            }
        });


       

        $(document).on('submit', '#teamForm', function(e) {
            e.preventDefault();

            var fdata = new FormData(this);

            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var sex = $('#sex').val();
            var ms = $('#ms').val();
            var dob = $('#dob').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var position = $('#position').val();
            var company = $('#company').val();
            var businesscategory = $('#businesscategory').val();
            var courses = $('#courses').val();
            var location = $('#location').val();
            var ostate = $('#ostate').val();
            var lga = $('#lga').val();
            var bank = $('#bank').val();
            var accno = $('#accno').val();
            var acctype = $('#acctype').val();


            if (fname == "") {
              toastr.error("Enter the first name", "Error!", {
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
                $("#fname").focus();
                return false;
            } else if (lname == "") {
              toastr.error("Enter the last name", "Error!", {
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
                $("#lname").focus();
                return false;
            } else if (sex == "") {
              toastr.error("Select the gender", "Error!", {
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
                $("#sex").focus();
                return false;
            } else if (ms == "") {
              toastr.error("Select the marital status", "Error!", {
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
                $("#ms").focus();
                return false;
            } else if (dob == "") {
              toastr.error("Select the date of birth", "Error!", {
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
                $("#dob").focus();
                return false;
            } else if (phone == "") {
              toastr.error("Enter the phone number", "Error!", {
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
                $("#phone").focus();
                return false;
            } else if (email == "") {
              toastr.error("Enter the email address", "Error!", {
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
                $("#email").focus();
                return false;
            } else if (!validateEmail(email)) {
              toastr.error("Enter a valid email address", "Error!", {
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
                $("#email").focus();
                return false;
            } else if (company == "") {
              toastr.error("Enter the business name", "Error!", {
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
                $("#company").focus();
                return false;
            } else if (businesscategory == "") {
              toastr.error("Select the business category", "Error!", {
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
                $("#businesscategory").focus();
                return false;
            } else if (courses == "") {
              toastr.error("Select a course ", "Error!", {
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
                $("#courses").focus();
                return false;
            } else if (location == "") {
              toastr.error("Enter the business location", "Error!", {
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
                $("#location").focus();
                return false;
            } else if (ostate == "") {
              toastr.error("Enter the business location state", "Error!", {
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
                $("#ostate").focus();
                return false;
            } else if (lga == "" || lga == "null" || lga == "Select your LGA of origin...") {
              toastr.error("Select the business location LGS", "Error!", {
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
                $("#lga").focus();
                return false;
            } else if (bank == "") {
              toastr.error("Select your bank", "Error!", {
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
                $("#bank").focus();
                return false;
            } else if (accno == "") {
              toastr.error("Enter the account number", "Error!", {
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
                $("#accno").focus();
                return false;
            } else if (isNaN(accno)) {
              toastr.error("Account number is invalid", "Error!", {
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
                $("#accno").focus();
                return false;
            } else if (accno.length < 10 || accno.length > 10) {
               
            toastr.error("Account number must be 10 digits only", "Error!", {
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
                $("#accno").focus();
                return false;
            } else if (acctype == "") {
               
                toastr.error("Select your account type here", "Error!", {
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
                $("#acctype").focus();
                return false;
            } else {

              $("#lbtnx").attr("disabled", true);
              $("#lbtnx").html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...');

              $.ajax({
                    type: "POST",
                    url: "/admin/dashboard/doUpdateMasterTrainer",
                    cache: false,
                    data: fdata,
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    dataType: "json",
                    success: function(content) {
                        if (content.status == "success") {
                            toastr.success(content.message, "Successful!", {
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
                        location.reload();
                        } else {
                          $("#lbtnx").attr("disabled", true);
                          $("#lbtnx").html('Save');
                          toastr.error(content.message, "Error!", {
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
                            location.reload();
                        }
                    },
                });
            }

        });

        function validateEmail(email) {
            var emailReg = new RegExp(
                /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i
            );
            return emailReg.test(email);
        }








    });
    </script>


</body>

</html>