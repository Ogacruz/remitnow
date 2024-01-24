$(document).ready(function () {

    $('#changePinForm').submit(function (e) { 
        e.preventDefault();

        let opin = $('#opin').val();
        let user_tpin = $('#user_tpin').val();
        let npin = $('#npin').val();
        let cpin = $('#cpin').val();  

        if(opin == ""){
            toastr.error("Enter current transaction pin", "Error!", {
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
        });$('#opin').focus(); return;
        }else if(npin == ""){
            toastr.error("Enter your new transaction pin", "Error!", {
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
            });$('#npin').focus(); return;
        }else if(npin == opin){
            toastr.error("New pin can not be the same as the current pin", "Error!", {
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
            });$('#npin').val('');$('#cpin').val('');$('#npin').focus(); return;
        }else if(cpin == ""){
            toastr.error("confirm your new transaction pin", "Error!", {
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
            });$('#cpin').focus(); return;
        }else if(cpin != npin){
            toastr.error("Transaction pin does not match", "Error!", {
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
            });$('#cpin').val('');$('#cpin').focus(); return;
        }else if(opin != user_tpin){
            toastr.error("Current pin does not exist", "Error!", {
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
            });$('#npin').val('');$('#cpin').val('');$('#npin').focus(); return;
        }else{
            const form = $("#changePinForm").get(0);
            const formData = new FormData(form);
            $.ajax({
                url: "/user/dashboard/update/pin",
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
                        });$("#btnUpdate").html("Update Pin");
                        $("#btnUpdate").attr("disabled", false);return false;
                    }
                },
                error: function (e) {
                console.log('error:',e);
                }
            });
        }
        
       });

       $(document).on("input", ".pin", function () {
        this.value = this.value.replace(/\D/g, "");
      }); 

      var newpin = document.getElementById('opin');
      opin.addEventListener('keyup', () => {
          if (opin.value.length > 4) {
              opin.value = opin.value.slice(0, 4);
          } else {
              return false;
          }
      });
  
      var npin = document.getElementById('npin');
      npin.addEventListener('keyup', () => {
          if (npin.value.length > 4) {
              npin.value = npin.value.slice(0, 4);
          } else {
              return false;
          }
      });

      var cpin = document.getElementById('cpin');
      cpin.addEventListener('keyup', () => {
          if (cpin.value.length > 4) {
              cpin.value = cpin.value.slice(0, 4);
          } else {
              return false;
          }
      });
});