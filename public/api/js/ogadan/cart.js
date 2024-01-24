$(document).ready(function () {

    getCounter();
    pullCart();

      $(document).on('change',"input[type=number]", function(){
        var id = $(this).attr('id');
        var qty = $(this).val();
        if(qty != 0){
            $.ajax({
                url: "/cart/update",
                type: "POST",
                data: {id:id,qty:qty},
                dataType: "json",            
                success: function (content) {
                    getCounter();
                    pullCart();
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
                },
                error: function (e) {
                console.log('error:',e);
                }
            });
        }
    });

    function getCounter(){
        var id = 1;
        $.ajax({
            url: "/cart/counter",
            type: "POST",
            data: {id:id},
            dataType: "json",            
            success: function (content) {
                if (content.status == "success") {
                     $('#counter').html(content.total);       
                }
            },
            error: function (e) {
            console.log('error:',e);
            }
        });
    }

    function pullCart(){
       
        $.ajax({
            url: "/cart/pullCart",
            type: "POST",
            async : false,
            dataType : 'json',            
            success: function (data) {
                var html = '';
                var i;
                var  ego  = 0;
                for(i=0; i <data.length; i++){                    
                    ego +=  parseFloat(data[i].subtotal);
                    html +='<tr>'+
                        '<th scope="row"><a class="remove-product" id="'+data[i].id+'" href="#"><i class="ti ti-x"></i></a></th>'+
                        '<td><img class="rounded" src="'+data[i].image+'" alt=""></td>'+
                        '<td><a class="product-title" href="#">'+data[i].name+'<span class="mt-1">&#x20A6;'+data[i].amount+' × '+data[i].qty+' <br/> = &#x20A6;'+data[i].sum+'</span></a></td>'+
                        '<td>'+
                        '<div class="quantity">'+
                            '<input class="qty-text" id="'+data[i].id+'" name="'+data[i].name+'" price="'+data[i].amount+'" type="number" min="1"  value="'+data[i].qty+'">'+
                        '</div>'+
                        '</td>'+
                    '</tr>';                     
                    }
                    $('#ajaxResult').html(html);
                    var moni = ego.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","); 
                    $('#bCounter').html(moni);
                    
            },
            error: function (e) {
            console.log('error:',e);
            }
        });
    }

$(document).on('click','.remove-product',function () { 
    var id = $(this).attr('id');
    $.ajax({
        url: "/cart/remove",
        type: "POST",
        data: {id:id},
        dataType: "json",
        beforeSend: function () {
            $("#"+id).attr("disabled", true);
            $("#"+id).html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...' );
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
                getCounter();
                pullCart();           
            } else {
                toastr.warning(content.message, "Error!", {
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
                });$("#"+id).html("Update Pin");
                $("#"+id).attr("disabled", false);return false;
            }
        },
        error: function (e) {
        console.log('error:',e);
        }
    });
    
});

   $('.addToCart').click(function (e) { 
    e.preventDefault();
   
    var id = $(this).attr('product_id');
    var name = $(this).attr('product_name');
    var price = $(this).attr('product_price');
    var image = $(this).attr('product_image');

    $.ajax({
        url: "/cart",
        type: "POST",
        data: {id:id,name:name,price:price,image:image},
        dataType: "json",
        beforeSend: function () {
            $("#"+id).attr("disabled", true);
            $("#"+id).html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Please wait...' );
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
                getCounter();           
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
                });$("#"+id).html("Update Pin");
                $("#"+id).attr("disabled", false);return false;
            }
        },
        error: function (e) {
        console.log('error:',e);
        }
    });
    
   });
});