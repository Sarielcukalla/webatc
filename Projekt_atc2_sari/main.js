$(document).ready(function() {
    $(document).on("click", "#addItem", function(e) {
        e.preventDefault();
        var form = $(this).closest(".form-submit");
        var barcode = form.find(".pid").val();
        var product = form.find(".pproduct").val();
        var image = form.find(".pimage").val();
        var description = form.find(".pdescription").val();
        var price = form.find(".pprice").val();
        // var code = form.find(".pcode").val();

        $.ajax({
            url: "../search.php",
            method: "post",
            data: {
                pid: barcode,
                pproduct: product,
                pimage: image,
                pdescription: description,
                pprice: price
            },
            success: function(response) {
                $(".alert-message").html(response);
                window.scrollTo(0, 0);
                // load_cart_item_number();
            }
        });
    });

});