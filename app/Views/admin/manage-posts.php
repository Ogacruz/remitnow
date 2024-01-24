<?=view('admin/inc/meta')?>
<link href="/public/v2/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="/public/v2/cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">

<!-- tagify-css -->
<link href="/public/v2/vendor/tagify/dist/tagify.css" rel="stylesheet">

<!-- Style css -->
<link href="/public/v2/css/style.css" rel="stylesheet">

</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">
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
                        Manage Posts </a>
                </li>
            </ol>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 active-p">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="heading mb-0">All Post</h4>
                        <div>
                            <a class="btn btn-primary btn-sm me-1" href="/admin/dashboard/post/new-post" role="button">+
                                Add New Post</a>
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
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Text</th>
                                            <th>Post Date</th>
                                            <th>Approval</th>
                                            <th>Status</th>
                                            <!-- <th>Read</th> -->
                                            <th>Edit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  

											foreach ($posts as $key => $post) {?>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox3"
                                                        required="">
                                                    <label class="form-check-label" for="customCheckBox3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/public/v1/images/post/<?=$post['post_images']?>"
                                                        class="avatar rounded-circle" alt="">
                                                    <p class="mb-0 ms-2">By : <?=$post['employee_name']?></p>
                                                </div>
                                            </td>
                                            <td><?=$post['category_title']?></td>
                                            <td><?=substr($post['post_title'],0,20)?>...</td>
                                            <td><?=substr($post['post_msg'],0,30)?>...</td>

                                            <td class="pe-0">
                                                <?=$post['post_publish_date']?>
                                            </td>

                                            <td class="pe-0 c-status">
                                                <?php
													 	if($post['post_publish_status']==""){ ?>
                                                <span><i class="fa-solid fa-circle text-primary"></i>In Progress</span>
                                                <?php }else{ ?>
                                                <span><i class="fa-solid fa-circle text-success"></i>Approved</span>
                                                <?php	}
													?>

                                            </td>

                                            <td class="pe-0">
                                                <?php
													 	if($post['post_status']==1){ ?>
                                                <span
                                                    class="badge badge-success light border-0 badge-sm">Published</span>
                                                <?php }else{ ?>
                                                <span class="badge badge-danger light border-0 badge-sm">Not
                                                    Published</span>
                                                <?php	}
													?>
                                            </td>

											<!-- <td>

                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                                    id="<?=$post['postID']?>"
                                                    class="btn btn-warning btn-sm editNowBtn light border-0"> <span
                                                        class="fa fa-search"></span> </button>
                                            </td> -->

                                            <td>

                                                <a href="/admin/dsahboard/post/<?=$post['postID']?>/edit"
                                                    id="<?=$post['postID']?>"
                                                    class="btn btn-info btn-sm editNowBtn light border-0"> <span
                                                        class="fa fa-edit"></span> </a>
                                            </td>
                                            <td>
                                                <?php
													if($post['post_status'] == 1){?>
                                                <button id="<?=$post['postID']?>"
                                                    class="btn btn-danger banBtn btn-sm light border-0"> <span
                                                        class="fa fa-ban"></span></button>
                                                <?php }else{ ?>
                                                <button id="<?=$post['postID']?>"
                                                    class="btn btn-info activatebTN btn-sm light border-0">
                                                    <span class="fa fa-check"></span>  </button>
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
 

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <label class="form-label">Email ID<span class="text-danger">*</span></label>
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
                                <label class="form-label">Send invitation email<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control " placeholder="+ invite">
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
    <script src="/public/v2/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/public/v2/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="/public/v2/vendor/datatables/js/buttons.html5.min.js"></script>
    <script src="/public/v2/vendor/datatables/js/jszip.min.js"></script>
    <script src="/public/v2/js/plugins-init/datatables.init.js"></script>

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
		$(document).ready(function () {
			
  $(document).on("click", ".banBtn", function (e) {
    var id = $(this).attr("id");
    Swal.fire({
      title: "Are you sure?",
      text: "The post details will be disabled from the system!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Am Sure!",
      showLoaderOnConfirm: true,
      preConfirm: function () {
        return new Promise(function (resolve) {
          $.ajax({
            url: "/admin/dashboard/banpost",
            type: "POST",
            data: "id=" + id,
            dataType: "json",
          }).done(function (content) {
              if (content.status == "success") {
                Swal.fire("Banned!", content.message, "success");
                var url = location.reload();
                setTimeout(function () {
                  window.location.href = url;
                }, 1500);
              } else {
                Swal.fire("Oops...", content.message, "error");
              }
            }).fail(function () {
              Swal.fire("Oops...", "Something went wrong with ajax !", "error");
            });
        });
      },
    });
  });

  $(document).on("click", ".activatebTN", function (e) {
    var id = $(this).attr("id");
    Swal.fire({
      title: "Are you sure?",
      text: "The post details will be restored in the system!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Am Sure!",
      showLoaderOnConfirm: true,
      preConfirm: function () {
        return new Promise(function (resolve) {
          $.ajax({
            url: "/admin/dashboard/activatepost",
            type: "POST",
            data: "id=" + id,
            dataType: "json",
          }).done(function (content) {
              if (content.status == "success") {
                Swal.fire("Activated!", content.message, "success");
                var url = location.reload();
                setTimeout(function () {
                  window.location.href = url;
                }, 1500);
              } else {
                Swal.fire("Oops...", content.message, "error");
              }
            }).fail(function () {
              Swal.fire("Oops...", "Something went wrong with ajax !", "error");
            });
        });
      },
    });
});



		});
	</script>

</body>

</html>