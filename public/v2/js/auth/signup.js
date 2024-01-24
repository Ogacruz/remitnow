$(document).ready(function() {
    'use strict'

    $("#regForm").on('submit', function(e) {
        e.preventDefault();

        var fullname = $('#fullname').val();
         var phone = $('#phone').val();
        var email = $('#email').val();
        var username = $('#username').val();
        var pass1 = $('#pass1').val();
        var pass2 = $('#pass2').val();
        var refid = $('#refid').val();

        if (fullname == "") {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error(' Enter your full name');
            $('#fullname').focus();
            return false;
        }else if (username == "") {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error('<em class="ti ti-close toast-message-icon"></em> Chose a unique username');
            $('#username').focus();
            return false;
        }else if (phone == "") {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error('<em class="ti ti-close toast-message-icon"></em> Enter your phone number');
            $('#phone').focus();
            return false;
        } else if (email == "") {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error('<em class="ti ti-close toast-message-icon"></em> Enter your email address');
            $('#email').focus();
            return false;
        } else if (!validateEmail(email)) {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error('<em class="ti ti-close toast-message-icon"></em> Enter a valid email address');
            $('#email').focus();
            return false;
        }  else if (pass1 == "") {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error('<em class="ti ti-close toast-message-icon"></em> Enter your password');
            $('#pass1').focus();
            return false;
        } else if (pass2 == "") {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error('<em class="ti ti-close toast-message-icon"></em> Confirm your password');
            $('#pass2').focus();
            return false;
        } else if (pass2 != pass1) {
            toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                toastr.error('<em class="ti ti-close toast-message-icon"></em> Password does not match');
            $('#pass2').focus();
            return false;
        } else {
        $('#lbtn').attr('disabled',true);
        $('#lbtn').html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait, processing...');
            $.ajax({
                type: "POST",
                url: "/auth/dosignup",
                cache: false,
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                success: function(content) {
                    if (content.status == "success") {
                        toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                            toastr.success('<em class="ti ti-check toast-message-icon"></em> ' + content.message);
                        setTimeout(function() { window.location.href = "/user/auth/signup/success"; }, 300);
                    } else {
                        $('#lbtn').html('Sign Up');
                        $('#lbtn').attr('disabled',false);
                        toastr.options = { closeButton: !0, debug: !1, newestOnTop: !0, progressBar: !1, positionClass: "toast-top-right", preventDuplicates: !0, showDuration: "1000", hideDuration: "10000", timeOut: "2000", extendedTimeOut: "1000" },
                            toastr.error('<em class="ti ti-close toast-message-icon"></em> ' + content.message);

                    }
                }
            });
        }

    });

    function validateEmail(email) {
        var emailReg = new RegExp(
            /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i
        );
        return emailReg.test(email);
    }
});