$(document).ready(function () {

    'use strict'
  
    //Email validation on input
    var $regexname = /^([a-zA-Z]{2,16})$/;

    $('#email').on('keypress keydown keyup', function () {
        if (!$(this).val().match($regexname)) {
            $("#email_msg").html('Enter your email address').css('color', 'red');
        } else {
            $("#email_msg").html('');
        }
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (re.test($('#email').val().trim())) {
            $("#email_msg").html('');
        } else {
            $("#email_msg").html('Invalid email address');
        }
    });

// Validate password
$('#password').on('keypress keydown keyup', function () {
    var number = /([0-9])/;
    var alphabets = /([a-zA-Z])/;
    var upper = /([A-Z])/;
    var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
    var password = $('#password').val().trim();
    if (password.length < 6) {
        $('#pass_msg').removeClass();
        $('#pass_msg').addClass('weak-password');
        $('#pass_msg').html("Weak (should be atleast 6 characters.)");
    } else {
        if (password.match(number) && password.match(upper) && password.match(alphabets) && password.match(special_characters)) {
            $('#pass_msg').removeClass();
            $('#pass_msg').addClass('strong-password');
            $('#pass_msg').html("");
        }
        else {
            $('#pass_msg').removeClass();
            $('#pass_msg').addClass('medium-password');
            $('#pass_msg').html("Medium (should include alphabets, uppercase, lowercase, numbers and special characters.)");
        }
    }
 });
 $('#password2').on('keypress keydown keyup', function () {
    var number = /([0-9])/;
    var alphabets = /([a-zA-Z])/;
    var upper = /([A-Z])/;
    var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
    var password = $('#password2').val().trim();
    if (password.length < 6) {
        $('#pass2_msg').removeClass();
        $('#pass2_msg').addClass('weak-password');
        $('#pass2_msg').html("Weak (should be atleast 6 characters.)");
    } else {
        if (password.match(number) && password.match(upper) && password.match(alphabets) && password.match(special_characters)) {
            $('#pass2_msg').removeClass();
            $('#pass2_msg').addClass('strong-password');
            $('#pass2_msg').html("");
        }
        else {
            $('#pass2_msg').removeClass();
            $('#pass2_msg').addClass('medium-password');
            $('#pass2_msg').html("Medium (should include alphabets, uppercase, lowercase, numbers and special characters.)");
        }
    }
 });

    $("#next0").click(function () {
        // validations
        $("#fname_msg").html('');
        var fname = $('#fname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var regme = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (fname == '') {
            $('#fname_msg').html('Enter your full name');
            $('#fname').trigger('focus');
            return false;
        }else if (email == "") {
            $('#email_msg').html('Enter your email address');
            $('#email').trigger('focus');
            return false;
        }else if (!regme.test($('#email').val().trim())) {
            $('#email_msg').html('Enter a valid email address');
            $('#email').trigger('focus');
            return false;
        }else if (password == "") {
            $('#pass_msg').html('Enter your password');
            $('#password').trigger('focus');
            return false;
        }else if ($('#pass_msg').html() == "Medium (should include alphabets, uppercase, lowercase, numbers and special characters.)") {
            return false;
        }else if (password2 == "") {
            $('#pass2_msg').html('Confirm your password');
            $('#password2').trigger('focus');
            return false;
        }else if ($('#pass2_msg').html() == "Medium (should include alphabets, uppercase, lowercase, numbers and special characters.)") {
            return false;
        }else if (password2 != password) {
            $('#pass2_msg').html('Password does not match');
            $('#password2').trigger('focus');
            return false;
        }else {
            $('#inputusername').val(email);
            $("#next0").attr('disabled', true);
            $("#next0").html('<div class="spinner-border text-white" style="font-size:13px;" role="status"><span class="visually-hidden">Loading...</span></div>');
            setTimeout(function () {
                $('#step0').hide();
                $('#step1').show();
                $('#step2').hide();
                $('#step3').hide();
                $("#next0").attr('disabled', false);
                $("#next0").html('Next');
            }, 1500);
        }
    });

    var number = /([0-9])/;
    $('#phone').on('keypress blur keydown keyup', function() {
        if ($(this).val().trim().length && !$(this).val().match(number)) {
            $("#phone_msg").html('Enter your phone number').css('color','red');
        } else {
            $("#phone_msg").html('');
        } 
      });

      $(document).on('input', '#phone', function () {
        this.value = this.value.replace(/\D/g, '');
    });

    var phone = document.getElementById('phone');
    phone.addEventListener('keyup', () => {
        if (phone.value.length > 11) {
            phone.value = phone.value.slice(0, 11);
        } else {
            return false;
        }
    });

    $('#day').on('change',function(){
        var day = $('#day').val();
        if(day == ""){
            $('#day').css("border", "red solid 1px");
        }else{
            $('#day').css("border", "#ffffff solid 1px");
        }
    });

    $('#month').on('change',function(){
        var month = $('#month').val();
        if(month == ""){
            $('#month').css("border", "red solid 1px");
        }else{
            $('#month').css("border", "#ffffff solid 1px");
        }
    });

    $('#year').on('change',function(){
        var year = $('#year').val();
        if(year == ""){
            $('#year').css("border", "red solid 1px");
        }else{
            $('#year').css("border", "#ffffff solid 1px");
        }
    });

    $('#sex').on('change',function(){
        var sex = $('#sex').val();
        if(sex == ""){
            $('#sex').css("border", "red solid 1px");
        }else{
            $('#sex').css("border", "#ffffff solid 1px");
        }
    });

    $("#next1").click(function () {
        var phone = $('#phone').val();
        var day = $('#day').val();
        var month = $('#month').val();
        var year = $('#year').val();
        var sex = $('#sex').val();
        if(phone == ""){
            $('#phone_msg').html('Enter your phone number');
            return false;
        }else if(phone.length < 11){
            $('#phone_msg').html('Phone number must be 11 digits');
            return false;
        }else if(day == ''){
            $('#day').css("border", "red solid 1px");
            $('#day').trigger('focus');
            return false;
        }else if(month == ''){
            $('#month').css("border", "red solid 1px");
            $('#month').trigger('focus');
            return false;
        }else if(year == ''){
            $('#year').css("border", "red solid 1px");
            $('#year').trigger('focus');
            return false;
        }else if(sex == ''){
            $('#sex').css("border", "red solid 1px");
            $('#sex').trigger('focus');
            return false;
        }else{
        $("#next1").attr('disabled', true);
        $("#next1").html('<div class="spinner-border text-white" style="font-size:13px;" role="status"><span class="visually-hidden">Loading...</span></div>');
        setTimeout(function () {
            $('#step0').hide();
            $('#step1').hide();
            $('#step2').show();
            $('#step3').hide();
            $("#next1").attr('disabled', false);
            $("#next1").html('Next');
        }, 1500);
    }
    });

    $("#next2").click(function () {

        var uploadFile = $('#uploadFile').val();
        var uploadFile1 = $('#uploadFile1').val();

        if(uploadFile == ""){
            $('#ids').css("color", "red");
            return false;
        }else if(uploadFile1 == "" ){
            $('#selfi').css("color", "red");
            return false;
        }else{
        $("#next2").attr('disabled', true);
        $("#next2").html('<div class="spinner-border text-white" style="font-size:13px;" role="status"><span class="visually-hidden">Loading...</span></div>');
        setTimeout(function () {
            $('#step0').hide();
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').show();
            $("#next2").attr('disabled', false);
            $("#next2").html('Next');
        }, 1500);
    }
    });
    // Finish validation
    $(document).on('submit','#rForm',function (e) {
        e.preventDefault();

        var newpin = $('#newpin').val();
        var confirmpin = $('#confirmpin').val();
        var ic = $('#i_check').prop('checked') ? true : false;

        $('#pin1_msg').css('color','white');
        $('#pin2_msg').css('color','white');
        $('.form-check-label').css('color','black');

        if (newpin == "") {
            $('#pin1_msg').html('Enter your transaction pin').css('color','red');
            $('#newpin').focus();return false;
        }else if (newpin.length < 4) {
            $('#pin1_msg').html('Transaction pin must be 4 digits').css('color','red');
            $('#newpin').focus();return false;
        }else if (confirmpin == "") {
            $('#pin2_msg').html('Confirm your transaction pin').css('color','red');
            $('#confirmpin').focus();return false;
        }else if (confirmpin.length < 4) {
            $('#pin2_msg').html('Confirm pin must be 4 digits').css('color','red');
            $('#confirmpin').focus();return false;
        }else if(confirmpin != newpin){
            $('#pin2_msg').html('Transaction pin does not match').css('color','red');
            $('#confirmpin').focus();return false;
        }else if (!ic==true) {
            $('.form-check-label').css('color','red');
           $('#i_check').focus();return false;
        }else{
            
            $('#sfBtn1').html('<div class="spinner-border text-white" style="font-size:13px;" role="status"><span class="visually-hidden">Loading...</span></div>'); 
            $('#sfBtn1').attr('disabled', true);
            
                       
            $.ajax({
                type: "POST",
                url: "/user/auth/signup",
                cache: false,
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                success: function (content) {
                    if (content.status == "success") {
                        $('#ozi').html('<div class="alert alert-success solid fade show"> ' + content.message + ' </div>');
                        $('#rForm')[0].reset();
                        var url = '/signin';
                     setTimeout(function () { window.location.href = url; }, 1500);
                    } else {
                        $('#ozi').html('<div class="alert alert-danger solid fade show"> ' + content.message + ' </div>');
                        setTimeout(function(){                            
                            $('#ozi').html('Enter your transaction pin, which must not be shared with anyone.');
                        },2000);
                        
                        $('#sfBtn1').attr('disabled', false);
                        $('#sfBtn1').html('Finish');
                        return false;
                    }
                }
            });
        }
    });


    ///// Go back control
    $("#back0").click(function () {
        $("#back0").attr('disabled', true);
        $("#back0").html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>');
        setTimeout(function () {
            $('#step0').show();
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').hide();
            $("#back0").attr('disabled', false);
            $("#back0").html('<i class="categories-icon" data-feather="arrow-left-circle"></i> &nbsp; Go Back');
        }, 1500);
    });
    $("#back1").click(function () {
        $("#back1").attr('disabled', true);
        $("#back1").html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>');
        setTimeout(function () {
            $('#step0').hide();
            $('#step1').show();
            $('#step2').hide();
            $('#step3').hide();
            $("#back1").attr('disabled', false);
            $("#back1").html('<i class="categories-icon" data-feather="arrow-left-circle"></i> &nbsp; Go Back');
        }, 1500);
    });
    $("#back2").click(function () {
        $("#back2").attr('disabled', true);
        $("#back2").html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>');
        setTimeout(function () {
            $('#step0').hide();
            $('#step1').hide();
            $('#step2').show();
            $('#step3').hide();
            $("#back2").attr('disabled', false);
            $("#back2").html('<i class="categories-icon" data-feather="arrow-left-circle"></i> &nbsp; Go Back');
        }, 1500);
    });

    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file 
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
    $("#uploadFile1").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file 
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview1").css("background-image", "url("+this.result+")");
            }
        }
    });

    $(document).on("input", ".ipin", function () {
        this.value = this.value.replace(/\D/g, "");
      }); 

    var newpin = document.getElementById('newpin');
    newpin.addEventListener('keyup', () => {
        if (newpin.value.length > 4) {
            $('#pin1_msg').css('color','white');
            newpin.value = newpin.value.slice(0, 4);
        } else {
            return false;
        }
    });

    var confirmpin = document.getElementById('confirmpin');
    confirmpin.addEventListener('keyup', () => {
        if (confirmpin.value.length > 4) {
            $('#pin2_msg').css('color','white');
            confirmpin.value = confirmpin.value.slice(0, 4);
        } else {
            return false;
        }
    });

    $('#i_check').change(function(){
        if(this.checked){
            $('.form-check-label').css('color','black');
        }else{
            $('.form-check-label').css('color','red');
        }
    });


});