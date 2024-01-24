$(document).ready(function () {
  
    $.fn.checkFileType = function (options) {
        var defaults = {
            allowedExtensions: [],
            preview: "",
            success: function () {},
            error: function () {}
        };
        options = $.extend(defaults, options);
        $previews = $(options.preview);
        return this.each(function (i) {
        
            $(this).on('change', function () {
                var value = $(this).val(),
                    file = value.toLowerCase(),
                    extension = file.substring(file.lastIndexOf('.') + 1),
                    $preview = $previews.eq(i);
        
                if ($.inArray(extension, options.allowedExtensions) == -1) {
                    options.error();
                    $(this).focus();
                } else {
                    if (this.files && this.files[0] && $preview) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $preview.show().attr('src', e.target.result);
                            options.success();
                        };
        
                        reader.readAsDataURL(this.files[0]);
                    } else {
                        options.error();
                    }
        
                }
        
            });
        
          });
        };$.fn.checkFileType = function (options) {
            var defaults = {
                allowedExtensions: [],
                preview: "",
                success: function () {},
                error: function () {}
            };
            options = $.extend(defaults, options);
            $previews = $(options.preview);
            return this.each(function (i) {
            
                $(this).on('change', function () {
                    var value = $(this).val(),
                        file = value.toLowerCase(),
                        extension = file.substring(file.lastIndexOf('.') + 1),
                        $preview = $previews.eq(i);
            
                    if ($.inArray(extension, options.allowedExtensions) == -1) {
                        options.error();
                        $(this).focus();
                    } else {
                        if (this.files && this.files[0] && $preview) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $preview.show().attr('src', e.target.result);
                                options.success();
                            };
            
                            reader.readAsDataURL(this.files[0]);
                        } else {
                            options.error();
                        }
            
                    }
            
                });
            
              });
            };
   
            const photoInp = $("#file");
            let imgURL; 

            $('#file').checkFileType({

                allowedExtensions: ['jpg', 'jpeg',"gif","png"],
                preview: ".preview",                
                success: function () {                  

                const form = $("#uploadForm").get(0);
                const formData = new FormData(form);
                $.ajax({
                    url: "/user/dashboard/upload/passport",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $("#imgPreview").attr("src", imgURL); 
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
                            });return false;
                        }
                    },
                    error: function (e) {
                    console.log('error:',e);
                    }
                });

                },
                error: function () {
                    toastr.error("Error! only jpg, jpeg, png and gif files are allowed", "File Error!", {
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
                    setTimeout(function(){
                        location.reload();
                    },3000);   return false;                      
                  
                }
              });
            photoInp.change(function (e) {
                imgURL = URL.createObjectURL(e.target.files[0]);
            });

           $('#updateProfile').submit(function (e) { 
            e.preventDefault();

            let ostate = $('#ostate').val();
            let lga = $('#lga').val();
            let city = $('#city').val();
            let address = $('#address').val();

            if(ostate == ""){
                toastr.error("Select your delivery state", "Error!", {
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
            });$('#ostate').focus(); return;
            }else if(lga == "" || lga == "Select lga"){
                toastr.error("Select your delivery lga", "Error!", {
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
                });$('#lga').focus(); return;
            }else if(city == "" || city == "undefined"){
                toastr.error("Select your delivery city/town", "Error!", {
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
                });$('#city').focus(); return;
            }else if(address == ""){
                toastr.error("Enter your delivery address", "Error!", {
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
                });$('#address').focus(); return;
            }else{
                const form = $("#updateProfile").get(0);
                const formData = new FormData(form);
                $.ajax({
                    url: "/user/dashboard/update/profile",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $("#btnUpdate").attr("disabled", true);
                        $("#btnUpdate").html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...' );
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
                            $("#btnUpdate").html("Save All Changes");
                            $("#btnUpdate").attr("disabled", false);
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
                            });$("#btnUpdate").html("Save All Changes");
                            $("#btnUpdate").attr("disabled", false);return false;
                        }
                    },
                    error: function (e) {
                    console.log('error:',e);
                    }
                });
            }
            
           });
            
});