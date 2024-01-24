$(document).ready(function () {

    $(document).on("submit", "#editUserForm", function (e) {
      e.preventDefault();

    });



    $(document).on("click", ".banBtn", function (e) {
        var id = $(this).attr("id");
        Swal.fire({
          title: "Are you sure?",
          text: "The user details will be disabled from the system!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, Am Sure!",
          showLoaderOnConfirm: true,
          preConfirm: function () {
            return new Promise(function (resolve) {
              $.ajax({
                url: "/admin/dashboard/banuser",
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
          text: "The user details will be restored in the system!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, Am Sure!",
          showLoaderOnConfirm: true,
          preConfirm: function () {
            return new Promise(function (resolve) {
              $.ajax({
                url: "/admin/dashboard/activateuser",
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
    
    
   

});