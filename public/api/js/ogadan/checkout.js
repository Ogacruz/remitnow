$(document).ready(function () {
  $("input[name='pay_method']").click(function () {
    var radioValue = $("input[name='pay_method']:checked").val();
    if (radioValue) {
      if (radioValue == "installment") {
        $("#option_panel").show("fast");
      } else {
        $("#option_panel").hide("fast");
      }
    }
  });

  $(document).on("click", "#install1", function () {
    $("#showbox_monthly").hide("fast");
    $("#showbox_weekly").show("fast");
  });

  $(document).on("click", "#install2", function () {
    $("#showbox_weekly").hide("fast");
    $("#showbox_monthly").show("fast");
  });

  $(document).on("click", ".mode_installment", function () {
    $("#insurance_option").show("hide");

    var cap = $(this).attr("cap");
    var value = $(this).attr("value");
    var amount = $("#ini_amount").html().replace(/,/g, "");
    var cash = parseFloat(amount) / parseFloat(value);

    $("#jcap").val(cap);
    $("#jvalue").val(value);
    $("#jamount").val(amount);

    cash = cash.toLocaleString("en", {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2,
    });

    toastr.info(
      "Your installment will be spread accross : " + value + " " + cap,
      "Done!",
      {
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
      }
    );

    $("#insurance_option").show("fast");
    $("#recordMsg").html("");

    if (cap == "weeks") {
      $("#recordMsg").html(
        'You will be paying <span class="text-warning">&#x20A6;' +
          cash +
          ' </span> weekly for <span class="text-warning"> ' +
          value +
          ' </span> consecutive <span class="text-warning">weeks</span>. <br><br> <i>Click to see a full breakdown of your payment</i>'
      );
    } else {
      $("#recordMsg").html(
        'You will be paying <span class="text-warning">&#x20A6;' +
          cash +
          ' </span> monthly for <span class="text-warning"> ' +
          value +
          ' </span> consecutive <span class="text-warning">months</span>. <br><br> <i>Click to see a full breakdown of your payment</i>'
      );
    }
  });

  var ego = $("#ini_amount")
    .html()
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  $(document).on("click", "#include", function () {

    var j_cap = $("#jcap").val();
    var j_value = $("#jvalue").val();
    var j_amount = $("#jamount").val();

    var new_percent = j_amount*10/100;

    if (this.checked) {
        alert('Good');
    }

    if (!this.checked) {
      $("#ini_amount").html(ego);
      return;
    }
  });
});
