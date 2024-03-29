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
<body>
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
					<li><h5 class="bc-title">Manage Client</h5></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Manage Client</a></li>
				</ol>
				<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects manage-client">
								<div class="tbl-caption">
									<h4 class="heading mb-0">Manage Client</h4>
								</div>
									<table id="reports-tbl" class="table">
										<thead>
											<tr>
												<th>Name</th>
												<th>User Name</th>
												<th>Contact</th>
												<th>Gender</th>
												<th>Location</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Uk</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>Usa</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic3.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>John Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">john.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Inactive</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Uk</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>Usa</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>John Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">john.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Inactive</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Uk</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>Usa</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic3.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>John Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">john.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Inactive</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Uk</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">ricky.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>Usa</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="products">
														<img src="/public/v2/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>John Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span class="text-primary">john.antony</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Inactive</span>
												</td>
											</tr>
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
		<!-- Scrollable modal -->
			<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal1">Add New Task</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				<form>
					<div class="row">
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInputfirst" class="form-label">Title<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Title">
						</div>	
						<div class="col-xl-6 mb-3">
							<label class="form-label">Project<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Project</option>
								<option value="html">Salesmate</option>
								<option value="css">ActiveCampaign</option>
								<option value="javascript">Insightly</option>
							</select>
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
							<input type="date" class="form-control" id="exampleFormControlInputthree">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
							<input type="date" class="form-control" id="exampleFormControlInputfour">
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Estimated Hour<span class="text-danger">*</span></label>
							<div class="input-group">
								<input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
											class="fas fa-clock"></i></span>
                            </div>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Status<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Status</option>
								<option value="html">In Progess</option>
								<option value="css">Pending</option>
								<option value="javascript">Completed</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">priority<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">priority</option>
								<option value="html">Hight</option>
								<option value="css">Medium</option>
								<option value="javascript">Low</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Category<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Category</option>
								<option value="html">Designing</option>
								<option value="css">Development</option>
								<option value="javascript">react developer</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Permission<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Permission</option>
								<option value="html">Public</option>
								<option value="css">Private</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Deadline add<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Deadline</option>
								<option value="html">Yes</option>
								<option value="css">No</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Assigned to<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Assigned</option>
								<option value="html">Bernard</option>
								<option value="css">Sergey Brin</option>
								<option value="javascript"> Larry Ellison</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Responsible Person<span class="text-danger">*</span></label>
							<input name='tagify' class="form-control py-0 ps-0 h-auto" value='James, Harry'>
							
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">Description<span class="text-danger">*</span></label>
							<textarea rows="3" class="form-control"></textarea>
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">Summary<span class="text-danger">*</span></label>
							<textarea rows="3" class="form-control"></textarea>
						</div>
						
					</div>
					<div>
						<button class="btn btn-danger light ms-1">Cancel</button>
						<button class="btn btn-primary me-1">Help Desk</button>
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
	<script src="/public/v2/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="/public/v2/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="/public/v2/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="/public/v2/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/public/v2/vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="/public/v2/vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="/public/v2/vendor/datatables/js/jszip.min.js"></script>
	<script src="/public/v2/js/plugins-init/datatables.init.js"></script>
	
	<!-- tagify -->
<script src="/public/v2/vendor/tagify/dist/tagify.js"></script>
	
	<!-- Apex Chart -->
	<script src="/public/v2/vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="/public/v2/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	
	<!-- Vectormap -->
     <script src="/public/v2/js/custom.js"></script>
	<script src="/public/v2/js/deznav-init.js"></script>
	<script src="/public/v2/js/demo.js"></script>
    <script src="/public/v2/js/styleSwitcher.js"></script>
	
</body>
</html>