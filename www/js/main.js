function addToCart(itemId) {
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/addtocart/" + itemId,
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });
}

function removeFromCart(itemId) {
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/removefromcart/" + itemId,
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();
            }
        }
    });
}