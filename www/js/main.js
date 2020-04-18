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

function recalculatePrice(productId) {
    let newCnt = $('#itemCnt_' + productId).val();
    let itemUnitPrice = $('#itemUnitPrice_' + productId).attr('value');
    let itemTotalPrice = newCnt * itemUnitPrice;

    $('#itemTotalPrice_' + productId).html(itemTotalPrice);
}

function getData(obj_form) {
    let hData = {};
    $('input, textarea, select', obj_form).each(function () {
        if (this.name && this.name !== '') {
            hData[this.name] = this.value;
        }
    });
    return hData;
}

function registerNewUser() {
    let postData = getData('#registerBox');

    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/register",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                alert('User successfully registered');

                $('#registerBox').hide();
            } else {
                alert(data['message']);
            }
        }
    });
}