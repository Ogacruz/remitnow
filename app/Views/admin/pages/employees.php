<?= view('admin/inc/meta') ?>
<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="/public/v2/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="/public/v2/cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="/public/v2/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<!-- tagify-css -->
<link href="/public/v2/vendor/tagify/dist/tagify.css" rel="stylesheet">
<!-- Style css -->
<link href="/public/v2/css/style.css" rel="stylesheet">
<link href="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
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
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Employee</h5>
                </li>
                <li class="breadcrumb-item"><a href="/admin/dashboard">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                                stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Dashboard</a>
                </li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Employee</a></li> -->
            </ol>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">Employees</h4>
                                    <div>
                                        <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas"
                                            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+
                                            Add Employee</a>
                                    </div>
                                </div>
                                <table id="example" class="table">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Image</th>
                                            <th>Employee Name</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Gender</th>
                                            <th>Location</th>
                                            <th>Date Joined</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        if ($employees == false) { ?>
                                        <tr>
                                            <td colspan="12"></td>
                                        </tr>
                                        <?php } else {
                                            foreach ($employees as $key => $emp) { ?>
                                        <tr>
                                            <td><?= $emp['employeeID'] ?></td>
                                            <td>
                                                <img src="/public/v2/images/contacts/<?= $emp['employee_passport'] ?>" class="avatar avatar-md" alt="">
                                            </td>
                                            <td>
                                                <?= $emp['employee_name'] ?>
                                            </td>
                                            
                                            <td>
                                                <?=$emp['employee_phone'] ?>
                                            </td>
                                            <td>
                                            <?= ucfirst($emp['employee_email']) ?>
                                            </td>
                                            <td>
                                                <?= $emp['employee_sex'] ?>
                                            </td>
                                            <td>
                                                <?= $emp['employee_lga'] ?>
                                            </td>
                                            <td>
                                                <?= $emp['employee_datejoining'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                        if ($emp['employee_status'] == 1) { ?>
                                                <span class="badge badge-success light border-0">Active</span>
                                                <?php } else { ?>
                                                <span class="badge badge-danger light border-0">Banned</span>
                                                <?php }
                                                        ?>
                                            </td>
                                            <td>
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                                    id="<?= $emp['employeeID'] ?>"
                                                    passport="<?= $emp['employee_passport'] ?>"
                                                    e_name="<?= $emp['employee_name'] ?>"
                                                    e_role="<?= $emp['employee_role'] ?>"
                                                    e_phone="<?= $emp['employee_phone'] ?>"
                                                    e_email="<?= $emp['employee_email'] ?>"
                                                    e_sex="<?= $emp['employee_sex'] ?>"
                                                    e_state="<?= $emp['employee_state'] ?>"
                                                    e_lga="<?= $emp['employee_lga'] ?>"
                                                    e_dob="<?= $emp['employee_dob'] ?>"
                                                    e_about="<?= $emp['employee_landmark'] ?>"
                                                    e_address="<?= $emp['employee_address'] ?>"
                                                    e_datejoining="<?= $emp['employee_datejoining'] ?>"
                                                    class="btn btn-info btn-sm editNowBtn light border-0"> <span
                                                        class="fa fa-edit"></span> </button>
                                            </td>
                                            <td>
                                                <?php
                                                        if ($emp['employee_status'] == 1) { ?>
                                                <button id="<?= $emp['employeeID'] ?>"
                                                    class="btn btn-danger banBtn btn-sm light border-0"> <span
                                                        class="fa fa-ban"></span> Block</button>
                                                <?php } else { ?>
                                                <button id="<?= $emp['employeeID'] ?>"
                                                    class="btn btn-info activatebTN btn-sm light border-0"> <span
                                                        class="fa fa-check"></span> Activate</button>
                                                <?php }
                                                        ?>
                                            </td>
                                        </tr>

                                        <?php    }
                                        }

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

    <!--**********************************
            Footer start
        ***********************************-->
    <?= view('admin/inc/footer') ?>
    <!--**********************************
            Footer end
        ***********************************-->

    <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
        <div class="offcanvas-header">
            <h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <form id="eForm">
                    <div class="row">



                        <div class="col-xl-12 mb-6">
                            <label for="ename" class="form-label">Employee Name<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ename" name="ename" placeholder="">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">Gender<span class="text-danger">*</span></label>
                            <select id="sex" name="sex" class="form-control">
                                <option value="">Please select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="dob" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="dob" id="dob">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="email" class="form-label">Employee Email<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="phone" class="form-label">Mobile<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                        </div>

                        <div class="col-xl-6 mb-3">
                            <label for="datejoining" class="form-label">Joining Date<span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="datejoining" name="datejoining">
                        </div>

                        <div class="col-xl-6 mb-3">
                            <label for="ename" class="form-label">Passport<span class="text-danger">*</span></label>
                            <input class="form-control" name="file" id="file" type="file" multiple>
                        </div>

                        <div class="col-xl-6 mb-3">
                            <label class="form-label">State Of Origin<span class="text-danger">*</span></label>
                            <select data-error="Select the state" placeholder="Select the state"
                                class="form-control select form-control" id="ostate" name="ostate">
                                <option value="">Select the state</option>
                                <option value='Abia'>Abia</option>
                                    <option value='Adamawa'>Adamawa</option>
                                    <option value='AkwaIbom'>AkwaIbom</option>
                                    <option value='Anambra'>Anambra</option>
                                    <option value='Bauchi'>Bauchi</option>
                                    <option value='Bayelsa'>Bayelsa</option>
                                    <option value='Benue'>Benue</option>
                                    <option value='Borno'>Borno</option>
                                    <option value='Crossrivers'>Crossrivers</option>
                                    <option value='Delta'>Delta</option>
                                    <option value='Ebonyi'>Ebonyi</option>
                                    <option value='Edo'>Edo</option>
                                    <option value='Ekiti'>Ekiti</option>
                                    <option value='Enugu'>Enugu</option>
                                    <option value='FCT'>FCT Abuja</option>
                                    <option value='Gombe'>Gombe</option>
                                    <option value='Imo'>Imo</option>
                                    <option value='Jigawa'>Jigawa</option>
                                    <option value='Kaduna'>Kaduna</option>
                                    <option value='Kano'>Kano</option>
                                    <option value='Katsina'>Katsina</option>
                                    <option value='Kebbi'>Kebbi</option>
                                    <option value='Kogi'>Kogi</option>
                                    <option value='Kwara'>Kwara</option>
                                    <option value='Lagos'>Lagos</option>
                                    <option value='Nassarawa'>Nassarawa</option>
                                    <option value='Niger'>Niger</option>
                                    <option value='Ogun'>Ogun</option>
                                    <option value='Ondo'>Ondo</option>
                                    <option value='Osun'>Osun</option>
                                    <option value='Oyo'>Oyo</option>
                                    <option value='Plateau'>Plateau</option>
                                    <option value='Rivers'>Rivers</option>
                                    <option value='Sokoto'>Sokoto</option>
                                    <option value='Taraba'>Taraba</option>
                                    <option value='Yobe'>Yobe</option>
                                    <option value='Zamfara'>Zamafara</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">LGA Of Origin<span class="text-danger">*</span></label>
                            <select data-error="Select LGA" placeholder="Select LGA" id="lga" name="lga"
                                class="lgax form-control select">
                                <option value="">Select the Local Government </option>
                            </select>
                        </div>


                        <div class="col-xl-12 mb-3">
                            <label class="form-label">Location Address<span class="text-danger">*</span></label>
                            <input id="address" name="address" placeholder="No 17 Nnebisi Road Asaba"
                                class="form-control">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label class="form-label">Location Land Mark<span class="text-danger">*</span></label>
                            <input id="about" name="about" placeholder="Near Asaba Mini Statdium" class="form-control">
                        </div>
                    </div>
                    <div>
                        <button id="reset" class="btn btn-danger light ms-1">Cancel</button>
                        <button type="submit" id="lbtn" class="btn btn-primary me-1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Employee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <label>Profile Picture</label>

                        <img id="picture" style="width:150px; height:150px; border-radius:50px;"> <br><br>
                        <input type="hidden" class="eid" id="eid" name="uid">
                        <div class="dz-default dlab-message upload-img mb-3">
                            <form id="passForm" class="dropzone">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667"
                                        stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="fallback">
                                    <input type="file" accept="image/*" name="fileFind" onchange="readURL(this)"
                                        id="fileFind" />
                                    <div id="uploaded_image"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form id="editForm">

                        <div class="row">
                            <div class="col-xl-12 mb-6">
                                <label for="ename" class="form-label">Employee Name<span
                                        class="text-danger">*</span></label>
                                <input type="hidden" class="eid" id="empid" name="empid">
                                <input type="text" class="form-control" id="ename1" name="ename1" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label" for="sex1">Gender<span class="text-danger">*</span></label>
                                <select id="sex1" name="sex1" class="form-control">
                                    <option id="esex" selected></option>
                                    <option value="">Please select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="dob1" class="form-label">Date of Birth<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="dob1" id="dob1">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="email" class="form-label">Employee Email<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email1" name="email1" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="phone1" class="form-label">Mobile<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone1" name="phone1" placeholder="">
                            </div>

                            <div class="col-xl-6 mb-3">
                                <label for="datejoining1" class="form-label">Joining Date<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="datejoining1" name="datejoining1">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="role1" class="form-label">User Role<span
                                        class="text-danger">*</span></label>
                                <select id="role1" name="role1" class="form-control">
                                    <option id="erole" selected></option>
                                    <option value="">Please select</option>
                                    <option value="superadmin">Superadmin</option>
                                    <option value="admin">Admin </option>
                                    <option value="agent">Agent</option>
                                </select>
                            </div>

                            <div class="col-xl-6 mb-3">
                                <label class="form-label" for="ostate1">State Of Origin<span
                                        class="text-danger">*</span></label>
                                <select data-error="Select the state" placeholder="Select the state"
                                    class="form-control select form-control" id="ostate1" name="ostate1">
                                    <option value="">Select the state</option>
                                    <option value='Abia'>Abia</option>
                                    <option value='Adamawa'>Adamawa</option>
                                    <option value='AkwaIbom'>AkwaIbom</option>
                                    <option value='Anambra'>Anambra</option>
                                    <option value='Bauchi'>Bauchi</option>
                                    <option value='Bayelsa'>Bayelsa</option>
                                    <option value='Benue'>Benue</option>
                                    <option value='Borno'>Borno</option>
                                    <option value='Crossrivers'>Crossrivers</option>
                                    <option value='Delta'>Delta</option>
                                    <option value='Ebonyi'>Ebonyi</option>
                                    <option value='Edo'>Edo</option>
                                    <option value='Ekiti'>Ekiti</option>
                                    <option value='Enugu'>Enugu</option>
                                    <option value='FCT'>FCT Abuja</option>
                                    <option value='Gombe'>Gombe</option>
                                    <option value='Imo'>Imo</option>
                                    <option value='Jigawa'>Jigawa</option>
                                    <option value='Kaduna'>Kaduna</option>
                                    <option value='Kano'>Kano</option>
                                    <option value='Katsina'>Katsina</option>
                                    <option value='Kebbi'>Kebbi</option>
                                    <option value='Kogi'>Kogi</option>
                                    <option value='Kwara'>Kwara</option>
                                    <option value='Lagos'>Lagos</option>
                                    <option value='Nassarawa'>Nassarawa</option>
                                    <option value='Niger'>Niger</option>
                                    <option value='Ogun'>Ogun</option>
                                    <option value='Ondo'>Ondo</option>
                                    <option value='Osun'>Osun</option>
                                    <option value='Oyo'>Oyo</option>
                                    <option value='Plateau'>Plateau</option>
                                    <option value='Rivers'>Rivers</option>
                                    <option value='Sokoto'>Sokoto</option>
                                    <option value='Taraba'>Taraba</option>
                                    <option value='Yobe'>Yobe</option>
                                    <option value='Zamfara'>Zamafara</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label" for="lga1">LGA Of Origin<span
                                        class="text-danger">*</span></label>
                                <select data-error="Select LGA" placeholder="Select LGA" id="lga1" name="lga1"
                                    class="lgax form-control select">
                                    <option id="elga" selected></option>
                                    <option value="">Select the Local Government </option>
                                </select>
                            </div>

                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Location Address<span class="text-danger">*</span></label>
                                <textarea rows="3" id="address1" name="address1" class="form-control"></textarea>
                            </div>

                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Location Land Mark<span class="text-danger">*</span></label>
                                <textarea rows="3" id="about1" name="about1" class="form-control"></textarea>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="lbtn1" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

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
    <script src="/public/v2/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/public/v2/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="page-error-404.html"></script>

    <!-- Dashboard 1 -->

    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/global/global.min.js"></script>
    <script
        src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js">
    </script>

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
    <script src="/public/v2/js/custom.js"></script>
    <script src="/public/v2/js/deznav-init.js"></script>
    <script src="/public/v2/js/demo.js"></script>
    <script src="/public/v2/js/styleSwitcher.js"></script>
    <!-- tagify -->
    <script src="/public/v2/vendor/tagify/dist/tagify.js"></script>

    <!-- Toastr -->
    <script src="/public/v2/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/v2/js/plugins-init/toastr-init.js"></script>
    
    <script src="/public/v2/js/auth/employee.js"></script>
    <script src="/public/v2/js/auth/statelga.js"></script>
    <script src="/public/v2/js/auth/statelga2.js"></script>

    <script src="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- <script src="/public/v2/js/plugins-init/sweetalert.init.js"></script> -->
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#picture').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</body>

</html>