$(document).ready(function () {

  
  $(document).on("submit", "#eForm", function (e) {
    e.preventDefault();

    var file = $("#file").val();
    var ename = $("#ename").val();
    var sex = $("#sex").val();
    var dob = $("#dob").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var department = $("#department").val();
    var edesignation = $("#designation").val();
    var datejoining = $("#datejoining").val();
    var role = $("#role").val();
    var state = $("#ostate").val();
    var lga = $("#lga").val();
    var address = $("#address").val();
    var about = $("#about").val();

    if (file == "") {
      toastr.error("Select employee passport photograph", "Error!", {
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
    } else if (ename == "") {
      toastr.error("Enter the employee's name", "Error!", {
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
      $("#ename").focus();
      return false;
    } else if (sex == "") {
      toastr.error("Select the gender", "Error!", {
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
      $("#sex").focus();
      return false;
    } else if (dob == "") {
      toastr.error("Enter date of birth", "Error!", {
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
      $("#dob").focus();
      return false;
    } else if (email == "") {
      toastr.error("Enter the email address", "Error!", {
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
      $("#email").focus();
      return false;
    } else if (!validateEmail(email)) {
      toastr.error("Enter a valid email address", "Error!", {
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
      $("#email").focus();
      return false;
    } else if (phone == "") {
      toastr.error("Enter the phone number", "Error!", {
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
      $("#phone").focus();
      return false;
    } else if (department == "") {
      toastr.error("Enter the department", "Error!", {
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
      $("#department").focus();
      return false;
    } else if (edesignation == "") {
      toastr.error("Enter the designation", "Error!", {
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
      $("#designation").focus();
      return false;
    } else if (datejoining == "") {
      toastr.error("Enter date of joining", "Error!", {
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
      $("#datejoining").focus();
      return false;
    } else if (role == "") {
      toastr.error("Select the role", "Error!", {
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
      $("#role").focus();
      return false;
    } else if (state == "") {
      toastr.error("Select the state of origin", "Error!", {
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
      $("#ostate").focus();
      return false;
    } else if (
      lga == "" ||
      lga == "null" ||
      lga == "Select your LGA of origin..."
    ) {
      toastr.error("Select the LGA", "Error!", {
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
      $("#lga").focus();
      return false;
    } else if (address == "") {
      toastr.error("Enter the contact address", "Error!", {
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
      $("#address").focus();
      return false;
    } else if (about == "") {
      toastr.error("Enter about the employee", "Error!", {
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
      $("#about").focus();
      return false;
    } else {
      $("#lbtn").attr("disabled", true);
      $("#lbtn").html(
        '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
      );
      $.ajax({
        type: "POST",
        url: "/admin/dashboard/employee/register",
        cache: false,
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: "json",
        success: function (content) {
          if (content.status == "success") {
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
            setTimeout(function () {
              location.reload();
            }, 300);
          } else {
            $("#lbtn").html("Submit");
            $("#lbtn").attr("disabled", false);
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

  function validateEmail(email) {
    var emailReg = new RegExp(
      /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i
    );
    return emailReg.test(email);
  }








  
  $(document).on("click", ".banBtn", function (e) {
    var id = $(this).attr("id");
    Swal.fire({
      title: "Are you sure?",
      text: "The employee details will be disabled from the system!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Am Sure!",
      showLoaderOnConfirm: true,
      preConfirm: function () {
        return new Promise(function (resolve) {
          $.ajax({
            url: "/admin/dashboard/banemployee",
            type: "POST",
            data: "id=" + id,
            dataType: "json",
          }).done(function (content) {
              if (content.status == "success") {
                Swal.fire("Banned!", content.message, "success");
                var url = location.reload();
                setTimeout(function () {
                  window.location.href = url;
                }, 1500);
              } else {
                Swal.fire("Oops...", content.message, "error");
              }
            }).fail(function () {
              Swal.fire("Oops...", "Something went wrong with ajax !", "error");
            });
        });
      },
    });
  });


  $(document).on("click", ".activatebTN", function (e) {
    var id = $(this).attr("id");
    Swal.fire({
      title: "Are you sure?",
      text: "The employee details will be restored in the system!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Am Sure!",
      showLoaderOnConfirm: true,
      preConfirm: function () {
        return new Promise(function (resolve) {
          $.ajax({
            url: "/admin/dashboard/activateemployee",
            type: "POST",
            data: "id=" + id,
            dataType: "json",
          }).done(function (content) {
              if (content.status == "success") {
                Swal.fire("Activated!", content.message, "success");
                var url = location.reload();
                setTimeout(function () {
                  window.location.href = url;
                }, 1500);
              } else {
                Swal.fire("Oops...", content.message, "error");
              }
            }).fail(function () {
              Swal.fire("Oops...", "Something went wrong with ajax !", "error");
            });
        });
      },
    });
});



$(document).on("click", ".editNowBtn", function (e) {

e.preventDefault();

  var img = "/public/v2/images/contacts/"+$(this).attr('passport');

  $('#picture').attr('src', img);

 

  $("#empid").val($(this).attr('id'));

  $("#ename1").val($(this).attr('e_name'));
  $("#esex").html($(this).attr('e_sex'));
  $("#esex").text($(this).attr('e_sex'));
  $("#esex").val($(this).attr('e_sex'));
  $("#dob1").val($(this).attr('e_dob'));
  $("#email1").val($(this).attr('e_email'));
  $("#phone1").val($(this).attr('e_phone'));

  $("#edepartment").html($(this).attr('e_department'));
  $("#edepartment").text($(this).attr('e_department'));
  $("#edepartment").val($(this).attr('e_department'));

  $("#edesignation").html($(this).attr('e_designation'));
  $("#edesignation").text($(this).attr('e_designation'));
  $("#edesignation").val($(this).attr('e_designation'));

  $("#datejoining1").val($(this).attr('e_datejoining'));

  $("#erole").html($(this).attr('e_role'));
  $("#erole").text($(this).attr('e_role'));
  $("#erole").val($(this).attr('e_role'));
  $("#ostate").val($(this).attr('e_state'));
  $("#elga").html($(this).attr('e_lga'));
  $("#elga").text($(this).attr('e_lga'));
  $("#elga").val($(this).attr('e_lga'));
  $("#address1").val($(this).attr('e_address'));
  $("#about1").val($(this).attr('e_about'));

});

$(document).on("submit", "#editForm", function (e) {
  e.preventDefault();

  var ename = $("#ename1").val();
  var sex = $("#sex1").val();
  var dob = $("#dob1").val();
  var email = $("#email1").val();
  var phone = $("#phone1").val();
  var department = $("#department1").val();
  var edesignation = $("#designation1").val();
  var datejoining = $("#datejoining1").val();
  var role = $("#role1").val();
  var state = $("#ostate1").val();
  var lga = $("#lga1").val();
  var address = $("#address1").val();
  var about = $("#about1").val();

  if (ename == "") {
    toastr.error("Enter the employee's name", "Error!", {
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
    $("#ename1").focus();
    return false;
  } else if (sex == "") {
    toastr.error("Select the gender", "Error!", {
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
    $("#sex1").focus();
    return false;
  } else if (dob == "") {
    toastr.error("Enter date of birth", "Error!", {
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
    $("#dob1").focus();
    return false;
  } else if (email == "") {
    toastr.error("Enter the email address", "Error!", {
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
    $("#email1").focus();
    return false;
  } else if (!validateEmail(email)) {
    toastr.error("Enter a valid email address", "Error!", {
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
    $("#email1").focus();
    return false;
  } else if (phone == "") {
    toastr.error("Enter the phone number", "Error!", {
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
    $("#phone1").focus();
    return false;
  } else if (department == "") {
    toastr.error("Enter the department", "Error!", {
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
    $("#department1").focus();
    return false;
  } else if (edesignation == "") {
    toastr.error("Enter the designation", "Error!", {
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
    $("#designation1").focus();
    return false;
  } else if (datejoining == "") {
    toastr.error("Enter date of joining", "Error!", {
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
    $("#datejoining1").focus();
    return false;
  } else if (role == "") {
    toastr.error("Select the role", "Error!", {
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
    $("#role1").focus();
    return false;
  } else if (state == "") {
    toastr.error("Select the state of origin", "Error!", {
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
    $("#ostate1").focus();
    return false;
  } else if (
    lga == "" ||
    lga == "null" ||
    lga == "Select your LGA of origin..."
  ) {
    toastr.error("Select the LGA", "Error!", {
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
    $("#lga1").focus();
    return false;
  } else if (address == "") {
    toastr.error("Enter the contact address", "Error!", {
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
    $("#address1").focus();
    return false;
  } else if (about == "") {
    toastr.error("Enter about the employee", "Error!", {
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
    $("#about1").focus();
    return false;
  } else {
    $("#lbtn1").attr("disabled", true);
    $("#lbtn1").html(
      '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...'
    );
    $.ajax({
      type: "POST",
      url: "/admin/dashboard/employee/edit-employee",
      cache: false,
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      dataType: "json",
      success: function (content) {
        if (content.status == "success") {
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
          setTimeout(function () {
            location.reload();
          }, 300);
        } else {
          $("#lbtn1").html("Submit");
          $("#lbtn1").attr("disabled", false);
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



$(document).on('change',"#fileFind",function(event) {
  event.preventDefault();

  var name = document.getElementById("fileFind").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   toastr.error('Invalid Image File', "Invalid!", {
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
  }); return;
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fileFind").files[0]);
  var f = document.getElementById("fileFind").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   toastr.error('Image File Size is very big', "Failed!", {
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
  });return;
  }
  else
  {
   form_data.append("fileFind", document.getElementById('fileFind').files[0]);
   form_data.append('empid', $("#empid").val());
   $.ajax({
    url:"/admin/dashboard/employee/update-passport",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'><span class=\"spinner\"><i class=\"fa fa-spinner fa-spin\"></i></span> Please wait...</label>");
     setTimeout(function(){
      $('#uploaded_image').html('');
     },3000);
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }



}); 

});


