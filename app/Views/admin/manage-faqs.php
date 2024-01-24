<?=view('admin/inc/meta')?>
<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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

    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">FAQS</a></li>
            </ol>
        </div>
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">
                                        Add FAQS
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                class="fal fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="cm-content-body  form excerpt">
                                    <div class="card-body">
                                        <form id="faqsForm">
                                            <div class="mb-3">
                                                <label class="form-label" for="q">Question</label>
                                                <input type="text" class="form-control" id="f_q" name="f_q"
                                                    placeholder="Ask your the questions?">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="a">Answer</label>
                                                <input type="text" class="form-control" id="f_a" name="f_a"
                                                    placeholder="Enter the answer to the questions.">
                                            </div>
                                            <div>
                                                <button type="submit" id="subBtn" class="btn btn-sm btn-primary"><span
                                                        class="fa fa-save"></span> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">
                                        FAQS List
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                class="fal fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="cm-content-body publish-content form excerpt">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-black">S.No</th>
                                                        <th scope="col" class="text-black">Question</th>
                                                        <th scope="col" class="text-black text-end">Answers</th>
                                                        <th scope="col" class="text-black text-end">Status</th>
                                                        <th scope="col" class="text-black text-end">Edit</th>
                                                        <th scope="col" class="text-black text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                        $i=1; foreach ($faqs as $key => $f) { ?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td><?=substr($f['faqs_q'],0,50)?>...</td>
                                                        <td><?=substr($f['faqs_a'],0,50)?>...</td>
                                                        <td><?php
													if($f['faqs_status'] == 1){?>
                                                            <span
                                                                class="badge badge-success light border-0">Active</span>
                                                            <?php }else{ ?>
                                                            <span
                                                                class="badge badge-danger light border-0">Banned</span>
                                                            <?php }
													?>
                                                        </td>
                                                        <td><button id="<?=$f['faqsID']?>" question="<?=$f['faqs_q']?>"
                                                                answer="<?=$f['faqs_a']?>"
                                                                class="btn btn-info edtiBtn btn-sm light border-0">
                                                                <span class="fa fa-edit"></span> Edit</button></td>
                                                        <td><?php
													if($f['faqs_status'] == 1){?>
                                                            <button id="<?=$f['faqsID']?>"
                                                                class="btn btn-danger banBtn btn-sm light border-0">
                                                                <span class="fa fa-ban"></span> Block</button>
                                                            <?php }else{ ?>
                                                            <button id="<?=$f['faqsID']?>"
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
            </div>
        </div>
    </div>

    <!--**********************************
            Content body end
        ***********************************-->



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
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" id="editFaqsModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Question & Answer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12 mb-4">
                            <label class="form-label font-w600">Question<span
                                    class="text-danger scale5 ms-2">*</span></label>
                            <input type="hidden" name="fid" id="fid">
                            <textarea class="form-control solid" id="question" name="question" rows="5"
                                aria-label="With textarea"></textarea>
                        </div>
                        <div class="col-xl-12 mb-4">
                            <label class="form-label font-w600">Answer:<span
                                    class="text-danger scale5 ms-2">*</span></label>
                            <textarea class="form-control solid" id="answer" name="answer" rows="5"
                                aria-label="With textarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" id="editFaqsModal" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Job Title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Company Name<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Position<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Category<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>QA Analyst</option>
										   <option>IT Manager</option>
										    <option>Systems Analyst</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Type<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Part-Time</option>
										   <option>Full-Time</option>
										    <option>Freelancer</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">No. of Vancancy<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Experience<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>1 yr</option>
										  <option>2 Yr</option>
										   <option>3 Yr</option>
										    <option>4 Yr</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Posted Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Last Date To Apply<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Close Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Gender:<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Male</option>
										   <option>Female</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary Form<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary To<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter City:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter State:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Counter:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Education Level:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Education Level" aria-label="name">
									</div>
									<div class="col-xl-12 mb-4">
										  <label  class="form-label font-w600">Description:<span class="text-danger scale5 ms-2">*</span></label>
										  <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
									</div>
								</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div> -->
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/public/v2/vendor/global/global.min.js"></script>
    <script src="/public/v2/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="/public/v2/js/dashboard/cms.js"></script>

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

                $(document).on('click', '.edtiBtn', function() {
                    $('#fid').val($(this).attr('id'));
                    $('#question').val($(this).attr('question'));
                    $('#answer').val($(this).attr('answer'));
                    $('#editFaqsModal').modal('show');
                });

                $(document).on('click', '#saveBtn', function() {

                        var fid = $('#fid').val();
                        var question = $('#question').val();
                        var answer = $('#answer').val();

                        if (question == "") {
                            toastr.error('Ask your question first', "Error!", {
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
                            $("#question").focus();
                            return false;
                        } else if (answer == "") {
                            toastr.error('Enter the aswer to the question', "Error!", {
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
                            $("#answer").focus();
                            return false;
                        } else {
                            Swal.fire({
                                title: "Are you sure?",
                                text: "You are about to update this question and answer !",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Yes, Am Sure!",
                                showLoaderOnConfirm: true,
                                preConfirm: function() {
                                    return new Promise(function(resolve) {
                                        $.ajax({
                                            url: "/admin/dashboard/updateFaqs",
                                            type: "POST",
                                            data: { question:question, answer:answer,fid:fid },
                                            dataType: "json",
                                        }).done(function(content) {
                                            if (content.status == "success") {
                                                Swal.fire("Updated!", content.message,
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
                        }
                        });



                    $(document).on('submit', '#faqsForm', function(e) {
                        e.preventDefault();

                        var fdata = new FormData(this);

                        var f_q = $('#f_q').val();
                        var f_a = $('#f_a').val();

                        if (f_q == "") {
                            toastr.error('Ask your question first', "Error!", {
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
                            $("#f_q").focus();
                            return false;
                        } else if (f_a == "") {
                            toastr.error('Enter the aswer to the question', "Error!", {
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
                            $("#f_a").focus();
                            return false;
                        } else {
                            $('#subBtn').attr('disabled', true);
                            $('#subBtn').html(
                                '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
                                );
                            $.ajax({
                                type: "POST",
                                url: "/faqs/admin/dashboard/doSaveFAQS",
                                cache: false,
                                data: new FormData(this),
                                processData: false,
                                contentType: false,
                                cache: false,
                                async: false,
                                dataType: "json",
                                success: function(content) {
                                    if (content.status == "success") {
                                        $("#subBtn").html('<span class="fa fa-save"></span> Save');
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
                                        $("#subBtn").html('<span class="fa fa-save"></span> Save');
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


                    $(document).on("click", ".banBtn", function(e) {
                        var id = $(this).attr("id");
                        Swal.fire({
                            title: "Are you sure?",
                            text: "The faqs will be disabled from the system!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, Am Sure!",
                            showLoaderOnConfirm: true,
                            preConfirm: function() {
                                return new Promise(function(resolve) {
                                    $.ajax({
                                        url: "/admin/dashboard/banFaqs",
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
                            text: "The faqs details will be restored in the system!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, Am Sure!",
                            showLoaderOnConfirm: true,
                            preConfirm: function() {
                                return new Promise(function(resolve) {
                                    $.ajax({
                                        url: "/admin/dashboard/activateFaqs",
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