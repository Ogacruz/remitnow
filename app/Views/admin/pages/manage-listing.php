<?=view('admin/inc/meta')?>
<?php
use App\Models\FileUploadModel;
$photo = new FileUploadModel();
  ?>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="/public/v2/images/favicon.png">
	<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/public/v2/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
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
			
			<div class="container-fluid">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h5 class="mb-0">Property Listings</h5>
					<div class="d-flex align-items-center">
						<div class="icon-box  icon-box-sm task-tab me-2">
							<a href="#">
								<svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.50032 3H2.66699V8.83333H8.50032V3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17.6668 3H11.8335V8.83333H17.6668V3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17.6668 12.1667H11.8335V18H17.6668V12.1667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.50032 12.1667H2.66699V18H8.50032V12.1667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
						</div>
						<a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Property</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="row task">
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="task-summary">
											<div class="d-flex align-items-center">
												<h2 class="text-primary count">8</h2> 
												<span>Not Started</span>
											</div>
											<p>Tasks assigne</p>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="task-summary">
											<div class="d-flex align-items-center">
												<h2 class="text-purple count">7</h2>
												<span>In Progress</span>
											</div>	
											<p>Tasks assigne</p>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="task-summary">
											<div class="d-flex align-items-center">
												<h2 class="text-warning count">13</h2>
												<span>Testing</span>
											</div>	
											<p>Tasks assigne</p>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="task-summary">
											<div class="d-flex align-items-center">
												<h2 class="text-danger count">11</h2>
												<span>Awaiting</span>
											</div>	
											<p>Tasks assigne</p>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="task-summary">
											<div class="d-flex align-items-center">
												<h2 class="text-success count">21</h2>
												<span>Complete</span>
											</div>	
											<p>Tasks assigne</p>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="task-summary">
											<div class="d-flex align-items-center">	
												<h2 class="text-danger count">16</h2>
												<span>pending</span>
											</div>	
											<p>Tasks assigne</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects task-table">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Task</h4>
									</div>
									<table  id="empoloyeestbl2" class="table">
										<thead>
											<tr>
												<th>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="checkAll" required>
														<label class="form-check-label" for="checkAll"></label>
													</div>
												</th>
												<th>#</th>
												<th>Name</th>
												<th>Category</th>
												<th>Images</th>
												<th>Current Price</th>
												<th>Old Price</th>
												<th>Brand</th>
												<th>Tag</th>
												<th>Feature</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											
										<?php
										$i=1; foreach ($products as $key => $prod) { ?>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox3" required>
														<label class="form-check-label" for="customCheckBox3"></label>
													</div>
												</td>
												<td><span><?=$i++?></span></td>
												<td>
													<div class="products">
														<div>
															<h6><?=$prod->product_name?></h6>
															<span><?=$prod->product_code?></span>
														</div>	
													</div>
												</td>
												<td><span><?=$prod->businesscategory_name?></span></td>
												<td>
													<div class="avatar-list avatar-list-stacked">
														<?php
														
														$photo->where('file_product_id',$prod->productID);
														$query = $photo->get();
														if ($query->getNumRows() > 0) {
															foreach ($query->getResult() as $row) {?>																
																<img src="<?=$row->file_path?>" class="avatar rounded-circle" alt="">
														<?php	}
															
														} 

														?>
													</div>
												</td>
												<td><span class="text-success">&#8358; <?=number_format($prod->product_current_price,2)?></span></td>
												<td><span class="text-danger">&#8358; <strike><?=number_format($prod->product_old_price,2)?></strike></span></td>
												<td><span><?php 
												       $output = preg_split('/(\.\s?|,\s?)/', $prod->product_brand, -1, PREG_SPLIT_NO_EMPTY);
													   array_walk($output, function(&$item, $idx) {
														echo "<span class=\"badge badge-primary light border-0 me-1\">".ucfirst($item)."</span>";
													});

												
												?></span></td>
												<td><span><?=$prod->product_tag?></span></td>
												<td><span><?=$prod->product_featured?></span></td>
												
												<td class="text-end">
													<select class="default-select status-select">
													  <option value="Medium">Medium</option>
													  <option value="High">High</option>
													  <option value="Low">Low</option>
													</select>
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
		

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			  <div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<div class="row">
					<div class="'col-xl-12">
						<div class="mb-3">
						  <label for="exampleFormControlInput1" class="form-label">Title<span class="text-danger">*</span></label>
						  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title Name">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="mb-3">
						  <label for="exampleFormControlInput2" class="form-label">Contacts<span class="text-danger">*</span></label>
						  <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="+910213598458">
						</div>
					</div>
					<div class="col-xl-6 mb-3">
						<label class="form-label">priority<span class="text-danger">*</span></label>
						<select class=" form-control">
							<option  >priority</option>
							<option value="html">Hight</option>
							<option value="css">Medium</option>
							<option value="javascript">Low</option>
						</select>
					</div>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>

		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal1">Add New Property</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				<form id="addProductForm">
					<div class="row">
						<div class="col-xl-6 mb-3">
							<label for="title" class="form-label">Product Title<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Title">
						</div>	
						<div class="col-xl-6 mb-3">
							<label class="form-label">Category<span class="text-danger">*</span></label>
							<select class=" form-control" id="category" name="category">
								<option   value="">Select an option</option>
								<?php
									foreach ($cats as $key => $c) {?>
                                <option value="<?=$c->businesscategoryID?>"><?=$c->businesscategory_name?></option>
                            <?php }
                            ?>   
							</select>
						</div>	
						<div class="col-xl-6 mb-3">
						
							<label for="new_price" class="form-label">Current Price<span class="text-danger">*</span></label>
							<div class="input-group">
							<span class="input-group-text"><span class=" text-success fa-1x">&#8358;</span></span>
							<input type="number" min="1" placeholder="11,500"class="form-control" id="new_price" name="new_price">
							
						</div>
						</div>
						<div class="col-xl-6 mb-3">
						
							<label for="old_price" class="form-label">Old Price<span class="text-danger">*</span></label>
							<div class="input-group">
							<span class="input-group-text"><span class="text-danger fa-1x">&#8358;</span></span>
							<input type="number" min="1" placeholder="15,000" class="form-control" id="old_price" name="old_price">
							
						</div>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Featured<span class="text-danger">*</span></label>							
							<select class=" form-control" id="featured" name="featured">
								<option value="">Select an option</option>
								<option>Top Products</option>
								<option>Weekly Best Sellers</option>
								<option>Featured Products</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Is Flash? (Optional)</label>
							<input type="date"  class="form-control" id="flash" name="flash">
						</div>
						
						<div class="col-xl-12 mb-3">
							<label class="form-label">Image<span class="text-danger">*</span></label>
							<input type="file" multiple class="form-control" id="file" name="file[]">
						</div>

						<div class="col-xl-6 mb-3">
							<label class="form-label">Tag<span class="text-danger">*</span></label>
							<select class=" form-control" id="tag" name="tag">
								<option   value="">Select an option</option>
								<option>New</option>
								<option>Sale</option>
								<option>On Sale</option>
							</select>
						</div>
						
						<div class="col-xl-6 mb-3">
							<label class="form-label">Brand</label>
							<input type="hidden" name="brand" id="brand">
							<input id='tagify' name='tagify' type="text" class="form-control py-0 ps-0 h-auto" placeholder='Nokia'>							
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">Description<span class="text-danger">*</span></label>
							<textarea rows="3" id="description" name="description" class="form-control"></textarea>
						</div>

					</div>
					<div>
						<button type="submit" id="publishBTN" class="btn btn-primary me-1">Save Now</button>
					</div>
				</form>
			  </div>
		  </div>
		</div>	
		
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-center">
			<div class="modal-content">
			  <div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
					<div class="row">
						<div class="col-xl-12">
							<input type="email" class="form-control" placeholder="hello@gmail.com">
							<label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
							<input class="form-control" type="date">
							<div class="row">
								<div class="col-xl-6">
									<label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-xl-6">
									<label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Surname">
									</div>
								</div>
							</div>
							<div class="mt-3 invite">
								<label class="form-label">Send invitation email<span class="text-danger">*</span></label>
								<input type ="email" class="form-control " placeholder="+ invite">
							</div>
							
					
						</div>
					</div>
					
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
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
	
	<!-- Dashboard 1 -->

    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/buttons.html5.min.js"></script>
    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/vendor/datatables/js/jszip.min.js"></script>
    <script src="https://w3crm.dexignzone.com/codeigniter/demo/public/assets/js/plugins-init/datatables.init.js"></script>

	
	<!-- tagify -->
<script src="/public/v2/vendor/tagify/dist/tagify.js"></script>
   
	<!-- Apex Chart -->
     <script src="/public/v2/js/custom.js"></script>
	<script src="/public/v2/js/deznav-init.js"></script>
	<script src="/public/v2/js/demo.js"></script>
    <script src="/public/v2/js/styleSwitcher.js"></script>

    <link href="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="/public/v2/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/public/v2/js/plugins-init/sweetalert.init.js"></script>
    <script src="/public/v2/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/v2/js/plugins-init/toastr-init.js"></script>

	<script src="/public/v2/js/auth/products.js"></script>

	<script>
		$(document).ready(function() {

		  var counters = $(".count");
		  var countersQuantity = counters.length;
		  var counter = [];

		  for (i = 0; i < countersQuantity; i++) {
			counter[i] = parseInt(counters[i].innerHTML);
		  }

		  var count = function(start, value, id) {
			var localStart = start;
			setInterval(function() {
			  if (localStart < value) {
				localStart++;
				counters[id].innerHTML = localStart;
			  }
			}, 500);
		  }

		  for (j = 0; j < countersQuantity; j++) {
			count(0, counter[j], j);
		  }
		});	
	</script>

	
</body>
</html>