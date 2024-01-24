<?=view('admin/inc/meta')?>

<link href="/public/v2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" href="/public/v2/vendor/select2/css/select2.min.css">
<link href="/public/v2/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
                            <form id="addpost" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for='title'> Title:</label>
                                                <input type="text" id="title" name="title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="catid"> Category:</label>
                                                <select type="text" id="catid" name="catid" class="form-control">
                                                    <option value="">Select post category</option>
                                                    <option value='0'>Uncategorized</option>
                                                    <?php
                                                        foreach ($cats as $key => $c) {?>
                                                    <option value="<?=$c['categoryID']?>"><?=$c['category_title']?>
                                                    </option>
                                                    <?php }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>                                       
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for='tags'> Tags/Keywords:</label>
                                                <input type="text"  id="tags" name='tagify' placeholder="Type post tags / keywords" class="form-control py-0 ps-0">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="card-title"> Body</h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <textarea name="editor" id="editor"></textarea>
                                                        <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                                                        <script>
                                                            CKEDITOR.replace( 'editor' );
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                <!-- /.box-body -->
                            
                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">Author

                                    </div>
                                    <div class="tools">
                                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                class="fal fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="cm-content-body form excerpt">
                                    <div class="card-body">
                                        <label class="form-label">User</label>
                                        <select type="text" id="authorid" name="authorid" class="form-control">
                                            <option value="">Select post author</option>
                                            <?php
                                                foreach ($authors as $key => $a) {?>
                                            <option value="<?=$a['employeeID']?>"><?=$a['employee_name']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>

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
                                            <div class="avatar-upload d-flex align-items-center">
                                                <div class=" position-relative ">
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                            style="background-image: url(images/no-img-avatar.png);">
                                                        </div>
                                                    </div>
                                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                                        <input type='file' class="form-control d-none" id="imageUpload" name="imageUpload"
                                                            accept=".png, .jpg, .jpeg">
                                                        <label for="imageUpload" class="btn btn-light ms-0">Select
                                                            Image</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="right-sidebar-sticky">
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa">
                                            Published
                                        </div>
                                        <div class="tools">
                                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                                    class="fal fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body pb-0">
                                            <ul class="d-flex align-items-center mb-2">
                                                <li><a href="javascript:void(0);"><i class="fa-solid fa-key"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0);" class="ms-2">Status:</a></li>
                                                <li><strong><a href="javascript:void(0);"
                                                            class="mx-2">Published</a></strong></li>
                                                <li><a href="javascript:void(0);" class="accordion accordion-primary"
                                                        id="headingOne" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-controls="collapseOne"
                                                        aria-expanded="true" role="button">Edit</a></li>
                                            </ul>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-bs-parent="#accordion-one">
                                                <div class="accordion-body-text border rounded">
                                                    <div class="mb-2">
                                                        <label  class="from-label w-100">Content Type</label>
                                                        <select id="pcontent" name="pcontent" class="publish-drop default-select">
                                                            <option selected>Select Status</option>
                                                            <option value="0">Unpublished</option>
                                                            <option value="1">Published</option>
                                                            <option value="2">Draft</option>
                                                            <option value="3">Trash</option>
                                                            <option value="4">Private</option>
                                                            <option value="5">Pending</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary btn-sm me-2" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="false" aria-controls="collapseOne">
                                                            Ok
                                                        </button>
                                                        <button class="btn btn-danger light btn-sm" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="false" aria-controls="collapseOne">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="d-flex align-items-center mb-2">
                                                <li><a href="javascript:void(0);"><i class="fa-solid fa-eye"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0);" class="ms-2">Status:</a></li>
                                                <li><strong><a href="javascript:void(0);"
                                                            class="mx-2">Public</a></strong></li>
                                                <li><a href="javascript:void(0);" class="accordion accordion-primary"
                                                        id="headingtwo" data-bs-toggle="collapse"
                                                        data-bs-target="#collapsetwo" aria-controls="collapsetwo"
                                                        aria-expanded="true" role="button">Edit</a></li>
                                            </ul>
                                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                                                data-bs-parent="#accordion-one">
                                                <div class="accordion-body-text border rounded">
                                                    <div class="basic-form">
                                                      
                                                            <div class="mb-3 mb-0">
                                                                <div class="radio">
                                                                    <label class="form-check-label">
                                                                        <input type="radio"
                                                                            name="optradio" value="Public" class="form-check-input">
                                                                        Public</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label class="form-check-label"><input type="radio"
                                                                            name="optradio" value="Password Protected" class="form-check-input">
                                                                        Password Protected</label>
                                                                </div>
                                                                <div class="radio disabled">
                                                                    <label class="form-check-label"><input type="radio"
                                                                            name="optradio" value="Private" class="form-check-input">
                                                                        Private</label>
                                                                </div>
                                                            </div>
                                                       
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary btn-sm me-2" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                                            aria-expanded="false" aria-controls="collapsetwo">
                                                            Ok
                                                        </button>
                                                        <button class="btn btn-danger light btn-sm" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                                            aria-expanded="false" aria-controls="collapsetwo">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="d-flex align-items-center mb-2 flex-wrap">
                                                <li><a href="javascript:void(0);"><i
                                                            class="fa-solid fa-calendar-days"></i></a></li>
                                                <li><a href="javascript:void(0);" class="ms-2">Published</a></li>
                                                <li><strong><a href="javascript:void(0);" class="mx-2">on :<?=date('Y-m-d H:i:s a')?> </a></strong></li>
                                                <li><a href="javascript:void(0);" class="accordion accordion-primary"
                                                        id="headingthree" data-bs-toggle="collapse"
                                                        data-bs-target="#collapsethree" aria-controls="collapsethree"
                                                        aria-expanded="true" role="button">Edit</a></li>
                                            </ul>
                                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                                data-bs-parent="#accordion-one">
                                                <div class="accordion-body-text border rounded">
                                                    <div class="basic-form mb-2">
                                                        <input type="date" name="datepicker" class=" form-control">
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary btn-sm me-2" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                                            aria-expanded="false" aria-controls="collapsethree">
                                                            Ok
                                                        </button>
                                                        <button class="btn btn-danger light btn-sm" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                                            aria-expanded="false" aria-controls="collapsethree">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin:0px;" class="mx-2">
                                        <div class="card-footer border-0 text-end py-3 ">
                                            <button id="subBtn" class="btn btn-primary btn-sm"> Publish </button>
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

      <!-- Toastr -->
      <script src="/public/v2/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/v2/js/plugins-init/toastr-init.js"></script>


  <script>
        $(document).ready(function () {


            $(document).on('change','#imageUpload',function(){
                var imageUpload = $('#imageUpload').val();
                if(imageUpload == ""){
                    $('.avatar-preview').css('border', 'solid 0.1px red');
                }else{
                    $('.avatar-preview').css('border', 'solid 0.1px #ccc');
                }
            });


            $(document).on('submit','#addpost',function(event) {
                event.preventDefault();
                $('.form-control').css('border', 'solid 0.1px #ccc');
                $('.avatar-preview').css('border', 'solid 0.1px #ccc');
                let title = $('#title').val();
                let catid = $('#catid').val();
                
                let tags = $('#tags').val();
                let editor = $('#editor').val();
                let authorid = $('#authorid').val();
                let imageUpload = $('#imageUpload').val();

                if (title == "") {
                    toastr.error("Enter the post title", "Error!", {
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
                    $('#title').focus();
                    $('#title').css('border', 'solid 0.1px red');
                    return false;
                } else if (catid == "") {
                    toastr.error("Enter the post category", "Error!", {
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
                    $('#catid').focus();
                    $('#catid').css('border', 'solid 0.1px red');
                    return false;
                } else if (tags == "") {
                    toastr.error("Enter the post tags or keywords", "Error!", {
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
                    $('#tags').focus();
                    $('#tags').css('border', 'solid 0.1px red');
                    return false;
                }else if (editor == "") {
                    toastr.error("Enter the post body", "Error!", {
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
                    $('#editor').focus();
                    $('#editor').css('border', 'solid 0.1px red');
                    return false;
                }else if (authorid == "") {
                    toastr.error("Select the post  author", "Error!", {
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
                    $('#authorid').focus();
                    $('#authorid').css('border', 'solid 0.1px red');
                    return false;
                }else if (imageUpload == "") {
                    toastr.error("Select the post featured image", "Error!", {
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
                    $('.avatar-preview').focus();
                    $('.avatar-preview').css('border', 'solid 0.1px red');
                    return false;
                } else {
                    $('#subBtn').attr('disabled', true);
                    $('#subBtn').html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...');
                    $.ajax({
                        type: "POST",
                        url: "/admin/dashboard/post/do-add-post",
                        cache: false,
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        dataType: "json",
                        success: function(content) {
                            if (content.status == "success") {
                                $('#addpost')[0].reset();
                                toastr.success(content.message, "Error!", {
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
                                $('#subBtn').attr('disabled', false);
                                $('#subBtn').html('Publish');
                            } else {
                                $('#subBtn').attr('disabled', false);
                                $('#subBtn').html('Publish');
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
                            }
                        }
                    });
                }

            });
        });
    </script>
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imageUpload").on('change', function() {
        readURL(this);
    });

    $('.remove-img').on('click', function() {
        var imageUrl = "/public/v2/images/no-img-avatar.png";
        $('.avatar-preview, #imagePreview').removeAttr('style');
        $('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
    });
    </script>

</body>

</html>