$(document).ready(function () {
    $('#addProductForm').submit(function (e) { 
        e.preventDefault();

        var title = $('#title').val();
        var category = $('#category').val();
        var new_price = $('#new_price').val();
        var old_price = $('#old_price').val();
        var featured = $('#featured').val();
        var file = $('#file').val();
        var tag = $('#tag').val();
        var tagify = $('#tagify').val();
        var description = $('#description').val();

        let names_obj = JSON.parse(tagify); // converts to object
        let names_str = names_obj.map(({value}) => value).toString(); // converts to string comma seperated
        let names_arr = names_str.split(','); // finally converts to array
        
        $('#brand').val(names_arr);

        if(title == ""){
            toastr.error("Enter the  property title", "Error!", {
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
            $("#title").focus();
            return false;
        }else if(category == ""){
            toastr.error("Select the  property category", "Error!", {
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
            $("#category").focus();
            return false;
        }else if(new_price == ""){
            toastr.error("Enter the new price", "Error!", {
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
            $("#new_price").focus();
            return false;
        }else if(old_price == ""){
            toastr.error("Enter the old price", "Error!", {
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
            $("#old_price").focus();
            return false;
        }else if(featured == ""){
            toastr.error("Select the product feature position", "Error!", {
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
            $("#featured").focus();
            return false;
        }else if(file == ""){
            toastr.error("Select the image or images for the product", "Error!", {
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
            $("#file").focus();
            return false;
        }else if(tag == ""){
            toastr.error("Select a tag for the product", "Error!", {
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
            $("#tag").focus();
            return false;
        }else if(description == ""){
            toastr.error("Enter description of the product", "Error!", {
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
            $("#description").focus();
            return false;
        }else{
            const form = $("#addProductForm").get(0);
            const formData = new FormData(form);
            $.ajax({
                url: "/user/dashboard/product/add-listing",
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $("#publishBTN").attr("disabled", true);
                    $("#publishBTN").html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...' );
                },
                success: function (content) {
                    if (content.status == "success") {
                        toastr.info(content.message, "Done!", {
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
                        $("#publishBTN").html("Save Now");
                        $("#publishBTN").attr("disabled", false);
                        $('#addProductForm')[0].reset();
                        location.reload();
                    } else {
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
                            tapToDismiss: !1
                        });$("#publishBTN").html("Save Now");
                        $("#publishBTN").attr("disabled", false);return false;
                    }
                },
                error: function (e) {
                console.log('error:',e);
                }
            });
        }       
    });



    $('#file').on('change', function(){
        if($(this).val() != '')
        {
        var count_of = $(this).get(0).files.length;
        // alert(count_of);
        for (var i = 0; i < $(this).get(0).files.length; ++i)
        {
            var img =$(this).get(0).files[i].name;
            var img_file_size=$(this).get(0).files[i].size;

            if(img_file_size<10485760)
            {
               var img_ext = img.split('.').pop().toLowerCase();

               if($.inArray(img_ext,['jpg','jpeg','png','gif'])===-1){

                  od_error = 'Yes';
                  toastr.error("File ("+img+") type not allowed.", "Error!", {
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
                });$("#file").val("");
               }
            //    else
            //    {
            //       alert("Humm");
            //    }
            }
            else
            {
               od_error = 'Yes';
               toastr.error("File("+img+") size is too big.", "Error!", {
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
            });$("#file").val("");
            }    
         }  
      }
    //   else
    //   {
    //     od_error = 'Yes';
    //     $('#img_err').html("<span class='text-danger'>Upload documents</span>");
    //   }
     });




});