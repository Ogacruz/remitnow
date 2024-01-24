<?=view('admin/inc/meta')?>
	<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="/public/v2/cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="/public/v2/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<!-- tagify-css -->
	
	<link href="/public/v2/vendor/tagify/dist/tagify.css" rel="stylesheet">
	<!-- Style css -->
   <link href="/public/v2/css/style.css" rel="stylesheet">
	
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">
<?=view('admin/inc/nav')?>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Chat box start
        ***********************************-->
    <?=view('admin/inc/chat')?>
    <!--**********************************
            Chat box End
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <?=view('admin/inc/header')?>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    <?=view('admin/inc/sidebar')?>
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
					<li><h5 class="bc-title">Dashboard</h5></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Team </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Team</a></li>
				</ol>
				
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 bst-seller">
						<div class="d-flex align-items-center justify-content-between mb-4">
							<h4 class="heading mb-0">Team</h4>
							<div class="d-flex align-items-center">
								<button type="button" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-filter me-2"></i> Filter </button>								
								<a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Team</a>
							</div>
						</div>
						<div class="card h-auto">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 dt-filter exports">
									<div class="tbl-caption">
									</div>
									<table id="customer-tbl" class="table shorting">
										<thead>
                                            <tr>                                              
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Action</th>
                                                   
                                            </tr>
                                        </thead>
										<tbody>
                                        <?php
                                                    $i=1; foreach ($teams as $key => $team) { ?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td>
                                                        <div class="products">
                                                            <img src="/public/v2/images/contacts/<?=$team['employee_passport']?>" class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6><?=$team['employee_name']?></h6>
                                                                <span><?=$team['team_position']?></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        <td><?=$team['team_category']?></td>
                                                        <td><?php
													if($team['team_status'] == 1){?>
                                                            <span
                                                                class="badge badge-success light border-0">Active</span>
                                                            <?php }else{ ?>
                                                            <span
                                                                class="badge badge-danger light border-0">Banned</span>
                                                            <?php }
													?>
                                                        </td>
                                                        <td>
                                                            <button 
                                                            id="<?=$team['teamID']?>"
                                                            eid="<?=$team['employeeID']?>"
                                                            ename="<?=$team['employee_name']?>"
                                                            category="<?=$team['team_category']?>" 
                                                            position="<?=$team['team_position']?>" 
                                                            facebook="<?=$team['team_facebook']?>" 
                                                            twitter="<?=$team['team_twitter']?>" 
                                                            instagram="<?=$team['team_instagram']?>" 
                                                            linkedin="<?=$team['team_linkedin']?>"
                                                            data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1" class="btn btn-info edtiBtn btn-sm light border-0"> <span class="fa fa-edit"></span> Edit</button>
                                                        </td>
                                                        <td><?php
													if($team['team_status'] == 1){?>
                                                            <button id="<?=$team['teamID']?>"
                                                                class="btn btn-danger banBtn btn-sm light border-0">
                                                                <span class="fa fa-ban"></span> Block</button>
                                                            <?php }else{ ?>
                                                            <button id="<?=$team['teamID']?>"
                                                                class="btn btn-info activatebTN btn-sm light border-0">
                                                                <span class="fa fa-check"></span> Activate</button>
                                                            <?php }
													?>
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
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal">Add Team</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
            <form id="addteamForm">				
					<div class="row">
						<div class="col-xl-12 mb-3">
							<label for="empid" class="form-label">Full Name<span class="text-danger">*</span></label>
							<select id="empid" name="empid" class="default-select style-1 form-control">
								<option  value="">Please select employee</option>
                                <?php
                                 foreach ($emp as $key => $e) {?>
                                   <option value="<?=$e['employeeID']?>"><?=$e['employee_name']?></option>
                                <?php  }
                                ?>						
								
							</select>
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="position" class="form-label">Position<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="position" name="position" placeholder="Special Advicer">
						</div>						
						<div class="col-xl-6 mb-3">
							<label class="form-label">Category<span class="text-danger">*</span></label>
							<select id="category" name="category" class="default-select style-1 form-control">
								<option  value="">Please select</option>
								<option value="Team">Team</option>
								<option value="Volunteer">Volunteer</option>
							</select>
						</div>						
						<div class="col-xl-6 mb-3">
							<label for="fb" class="form-label">Facebook<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="facebook" name="facebook" placeholder="https://facebook.com/userid">
						</div>
                        <div class="col-xl-6 mb-3">
							<label for="fb" class="form-label">Twitter<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="twitter" name="twitter" placeholder="https://twitter.com/userid">
						</div>
                        <div class="col-xl-6 mb-3">
							<label for="in" class="form-label">Instagram<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="instagram" name="instagram" placeholder="https://instagram.com/userid">
						</div>
                        <div class="col-xl-6 mb-3">
							<label for="li" class="form-label">LinkedIn<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="https://linkedin.com/userid">
						</div>						
					</div>
					<div>
						<button type="reset" class="btn btn-danger light me-1">Cancel</button>
						<button type="submit" id="subBtn" class="btn btn-primary me-1"><span class="fa fa-save"></span> Submit</button>
					</div>
				</form>
			  </div>
		  </div>
		</div>		
		
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal1">Edit Team</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				<form id="editForm">
					<div class="row">
                    <div class="col-xl-12 mb-3">
							<label for="empidx" class="form-label">Full Name<span class="text-danger">*</span></label>
							<select id="empidx" name="empidx" class=" style-1 form-control">
                                <option id="empidx1"></option>
								<option  value="">Please select employee</option>
                                <?php
                                 foreach ($emp as $key => $e) {?>
                                   <option value="<?=$e['employeeID']?>"><?=$e['employee_name']?></option>
                                <?php  }
                                ?>	
							</select>
						</div>	
						<div class="col-xl-6 mb-3">
                            <input type="hidden" id="tid" name="tid">
							<label for="positionx" class="form-label">Position<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="positionx" name="positionx" placeholder="Special Advicer">
						</div>						
						<div class="col-xl-6 mb-3">
							<label class="form-label">Category<span class="text-danger">*</span></label>
							<select id="categoryx" name="categoryx" class=" style-1 form-control">
                                <option id="catid"></option>
								<option  value="">Please select</option>
								<option value="Team">Team</option>
								<option value="Volunteer">Volunteer</option>
							</select>
						</div>						
						<div class="col-xl-6 mb-3">
							<label for="fb" class="form-label">Facebook<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="facebookx" name="facebookx" placeholder="https://facebook.com/userid">
						</div>
                        <div class="col-xl-6 mb-3">
							<label for="fb" class="form-label">Twitter<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="twitterx" name="twitterx" placeholder="https://twitter.com/userid">
						</div>
                        <div class="col-xl-6 mb-3">
							<label for="in" class="form-label">Instagram<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="instagramx" name="instagramx" placeholder="https://instagram.com/userid">
						</div>
                        <div class="col-xl-6 mb-3">
							<label for="li" class="form-label">LinkedIn<span class="text-danger">*</span></label>
							<input type="url" class="form-control" id="linkedinx" name="linkedinx" placeholder="https://linkedin.com/userid">
						</div>	
						
					</div>
					<div>
						<button id="subBtn1" type="submit" class="btn btn-primary me-1">Save Changes</button>
					</div>
				</form>
			  </div>
		  </div>
		</div>	
        <!--**********************************
            Footer start
        ***********************************-->
        <?=view('admin/inc/footer')?>
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
	<script src="/public/v2/vendor/apexchart/apexchart.js"></script>
	<!-- Dashboard 1 -->
	<script src="/public/v2/vendor/tagify/dist/tagify.js"></script>
	<!-- tagify -->
	<script src="/public/v2/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/public/v2/vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="/public/v2/vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="/public/v2/vendor/datatables/js/jszip.min.js"></script>
	<script src="/public/v2/js/plugins-init/datatables.init.js"></script>
   
	<!-- Apex Chart -->
	<script src="/public/v2/vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="/public/v2/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Vectormap -->
     <script src="/public/v2/js/custom.js"></script>
	<script src="/public/v2/js/deznav-init.js"></script>
	<script src="/public/v2/js/demo.js"></script>
    <script src="/public/v2/js/styleSwitcher.js"></script>
	
	

    <link href="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
   
    <script src="/public/v2/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/v2/js/plugins-init/toastr-init.js"></script>


    <script>
    $(document).ready(function() {


        
        $(document).on('submit', '#addteamForm', function(e) {
                        e.preventDefault();

                        var fdata = new FormData(this);

                        var name = $('#name').val();
                        var position = $('#position').val();
                        var category = $('#category').val();

                        if (name == "") {
                            toastr.error('Select an employee', "Error!", {
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
                                tapToDismiss: !1
                            });
                            $("#name").focus();
                            return false;
                        } else if (position == "") {
                            toastr.error('Enter the official position', "Error!", {
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
                                tapToDismiss: !1
                            });
                            $("#position").focus();
                            return false;
                        } else if (category == "") {
                            toastr.error('Enter the official category', "Error!", {
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
                                tapToDismiss: !1
                            });
                            $("#category").focus();
                            return false;
                        } else {
                            $('#subBtn').attr('disabled', true);
                            $('#subBtn').html(
                                '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
                                );
                            $.ajax({
                                type: "POST",
                                url: "/admin/dashboard/doSaveTeam",
                                cache: false,
                                data: new FormData(this),
                                processData: false,
                                contentType: false,
                                cache: false,
                                async: false,
                                dataType: "json",
                                success: function(content) {
                                    if (content.status == "success") {
                                        $("#subBtn").html('<span class="fa fa-save"></span> Submit');
                                        $("#subBtn").attr("disabled", false);
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
                                        $("#subBtn").html('<span class="fa fa-save"></span> Submit');
                                        $("#subBtn").attr("disabled", false);
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


                        

                $(document).on('click', '.edtiBtn', function() {                    
                    $('#tid').val($(this).attr('id'));
                    $('#empidx1').html($(this).attr('ename'));
                    $('#empidx1').val($(this).attr('eid'));
                    $('#positionx').val($(this).attr('position'));
                    $('#catid').html($(this).attr('category'));
                    $('#catid').val($(this).attr('category'));
                    $('#facebookx').val($(this).attr('facebook'));
                    $('#twitterx').val($(this).attr('twitter'));
                    $('#instagramx').val($(this).attr('instagram'));
                    $('#linkedinx').val($(this).attr('linkedin'));
                    
                });

                $(document).on('submit', '#editForm', function(e) {
                    e.preventDefault();
                    var empidx = $('#empidx').val();
                    var tid = $('#tid').val();
                        var positionx = $('#positionx').val();
                        var category = $('#category').val();

                        if (empidx == "") {
                            toastr.error('Select an employee', "Error!", {
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
                                tapToDismiss: !1
                            });
                            $("#empidx").focus();
                            return false;
                        } else if (positionx == "") {
                            toastr.error('Enter the official position', "Error!", {
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
                                tapToDismiss: !1
                            });
                            $("#positionx").focus();
                            return false;
                        } else if (categoryx == "") {
                            toastr.error('Enter the official category', "Error!", {
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
                                tapToDismiss: !1
                            });
                            $("#categoryx").focus();
                            return false;
                        } else {
                            $('#subBtn1').attr('disabled', true);
                            $('#subBtn1').html(
                                '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
                                );
                                $.ajax({
                                type: "POST",
                                url: "/admin/dashboard/doUpdateTeam",
                                cache: false,
                                data: new FormData(this),
                                processData: false,
                                contentType: false,
                                cache: false,
                                async: false,
                                dataType: "json",
                                success: function(content) {
                                    if (content.status == "success") {
                                        $("#subBtn").html('<span class="fa fa-save"></span> Submit');
                                        $("#subBtn").attr("disabled", false);
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
                                        $("#subBtn1").html('Save Changes');
                                        $("#subBtn1").attr("disabled", false);
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





                    $(document).on("click", ".banBtn", function(e) {
                        var id = $(this).attr("id");
                        Swal.fire({
                            title: "Are you sure?",
                            text: "The team member will be disabled from the system!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, Am Sure!",
                            showLoaderOnConfirm: true,
                            preConfirm: function() {
                                return new Promise(function(resolve) {
                                    $.ajax({
                                        url: "/admin/dashboard/banTeam",
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

                    $(document).on("click", ".activatebTN", function(e) {
                        var id = $(this).attr("id");
                        Swal.fire({
                            title: "Are you sure?",
                            text: "The team member details will be restored in the system!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, Am Sure!",
                            showLoaderOnConfirm: true,
                            preConfirm: function() {
                                return new Promise(function(resolve) {
                                    $.ajax({
                                        url: "/admin/dashboard/activateTeam",
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