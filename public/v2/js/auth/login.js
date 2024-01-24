$(document).ready(function() {
    'use strict'
    // let phone = document.getElementById('user-name');
    // phone.addEventListener('keyup', () => {
    //     var check = document.getElementById('user-name').value;
    //     var val = check.toString()[0];
    //     if (val == '+') {
    //         if (phone.value.length > 14) {
    //             phone.value = phone.value.slice(0, 14);
    //         }
    //     } else if (val == '0') {
    //         if (phone.value.length > 11) {
    //             phone.value = phone.value.slice(0, 11);
    //         }
    //     } else {
    //         return false;
    //     }
    // });    

    $("#lForm").on('submit', function(e) {
        e.preventDefault();
       
        var email = $('#user-name').val();
        var password = $('#dz-password').val();

        if (email === "") {
                toastr.error("Enter your username", "Error!", {
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
                });$('#user-name').focus(); return false;
        } else if (password === "") {
                toastr.error("Enter your password", "Error!", {
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
            $('#dz-password').focus();
            return false;
        } else {

            $("#lbtn").attr("disabled", true);
            $('#lbtn').html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...');	

            $.ajax({
                type: "POST",
                url: "/auth/dologin",                
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                success: function(content) {
                    $("#lbtn").attr("disabled", false);
                    $('#lbtn').html('Log In');	
                    if (content.status == "success") {
                        toastr.success(content.message, "Access Grated!", {
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
                        setTimeout(function() { window.location.href = "/admin/dashboard"; }, 3000);
                    } else {
                        $("#lbtn").attr("disabled", false);
                        $('#lbtn').html('Log In');
                        toastr.error(content.message, "Access Denied!", {
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

                    }
                }
            });
        }

    });
});