$(document).ready(function () {

    $('#changePasswordForm').submit(function (e) { 
        e.preventDefault();

        let oldpass = $('#oldpass').val();
        let recap = $('#recap').val();
        let registerPassword = $('#registerPassword').val();
        let confirmPassword = $('#confirmPassword').val();  

        if(oldpass == ""){
            toastr.error("Enter your current password", "Error!", {
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
        });$('#oldpass').focus(); return;
        }else if(registerPassword == ""){
            toastr.error("Enter your new password", "Error!", {
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
            });$('#registerPassword').focus(); return;
        }else if(registerPassword == oldpass){
            toastr.error("New password can not be the same as the current password", "Error!", {
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
            });$('#registerPassword').val('');$('#confirmPassword').val('');$('#registerPassword').focus(); return;
        }else if(confirmPassword == ""){
            toastr.error("Enter your confirm password", "Error!", {
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
            });$('#confirmPassword').focus(); return;
        }else if(confirmPassword != registerPassword){
            toastr.error("Password does not match", "Error!", {
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
            });$('#confirmPassword').val('');$('#confirmPassword').focus(); return;
        }else if(oldpass != recap){
            toastr.error("Current password does not exist", "Error!", {
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
            });$('#oldpass').val('');$('#registerPassword').val('');$('#confirmPassword').val('');$('#registerPassword').focus(); return;
        }else{
            const form = $("#changePasswordForm").get(0);
            const formData = new FormData(form);
            $.ajax({
                url: "/user/dashboard/update/password",
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
                    window.location.href = "/user/auth/logout";
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
                        });$("#btnUpdate").html("Update Password");
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