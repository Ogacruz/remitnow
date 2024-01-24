$(function() {
    'use strict' 

var $regexname = /^([a-zA-Z]{2,16})$/;

  $('#username').on('keypress keydown keyup', function() {
    if ($(this).val().trim().length && !$(this).val().match($regexname)) {
        $("#uMsg").html('Enter your email').css('color','red');
    } else {
        $("#uMsg").html('');
    }
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (re.test($('#username').val().trim())) {
            $("#uMsg").html('Email address is validated').css('color','green');
        } else {
            $("#uMsg").html('Invalid email address');
        }
  });
  $('#password').on('keypress keydown keyup', function() {
    if ($(this).val().trim().length && !$(this).val().match($regexname)) {
        $("#pMsg").html('Enter your password').css('color','red');
    } else {
        $("#pMsg").html('');
    }
  });

  
    $("#lform").on('submit', function(e) {

        e.preventDefault();

        $("#uMsg").html('');
        $("#pMsg").html('');

        var email = $('#username').val();
        var password = $('#password').val();
        
        if (email == "") { 
           $("#uMsg").html('Enter your email address').css('color','red');
            $('#username').trigger("focus");
            return false;
        } else if (password == "") {
           $("#pMsg").html('Enter your password').css('color','red');
            $('#password').trigger("focus");
            return false;
        } else {
            $('#lbtn').attr('disabled', true);
            $('#lbtn').html('<div class="spinner-border text-white" role="status"><span class="visually-hidden">Loading...</span></div>');            
            $.ajax({
                type: "POST",
                url: "/auth/signin/dologin", 
                cache: false,
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                success: function(content) {
                    if (content.status == "success") {
                            if (content.role == 'superadmin' || content.role == 'admin' || content.role == 'staff') {
                                setTimeout(function() { window.location.href = "/admin/dashboard"; }, 1500);
                            } else {
                                setTimeout(function() { window.location.href = "/user/dashboard"; }, 1500);
                            }
                    } else {   
                        $('#ozi').html('<div class="alert alert-danger solid fade show"> ' + content.message + ' </div>');                     
                        setTimeout(function(){                            
                            $('#ozi').html('');
                        },2000);
                        $('#lbtn').attr('disabled', false);
                        $('#lbtn').html('Log In'); 
                    }
                }
            });
        }

    });
});