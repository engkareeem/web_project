

function checkout(id) {
    if(id !== '') {
        shop_operation('purchase',id,1);
    } else {
        shop_operation('purchase-cart',id,1);
    }
}
function updateCheckout() {
    setTimeout(function() {
        let response;
        $.ajax({
            url: 'api/UserShop.php',
            method: 'POST',
            data: {
                type: 'price-query',
                product_id: '',
            },
            async: false,
            success: function(data) {
                response = data;
                console.log(response);
            },
            error: function(error) {
                console.log('Error:', error);
                response = 'Bad Request';
            }
        });

        if(response !== 'Bad Request') {
            let totalItemsPriceElement = document.querySelector('.items-price .amount');
            let feesElement = document.querySelector('.fees .amount');
            let discountsElement = document.querySelector('.discounts .amount');
            let totalPriceElement = document.querySelector('.total-price .amount');
            let totalItemsPrice = response.split(';')[0];
            let totalPrice = response.split(';')[1];
            totalItemsPriceElement.innerText = totalItemsPrice;
            feesElement.innerText = 0.5;
            discountsElement.innerText = totalItemsPrice - totalPrice + 0.5;
            totalPriceElement.innerText = totalPrice;
        }
    }, 100);

}
$(()=> {
    $(".horizontal-spinner .spinner-decrement").on('click',function () {
        let spinnerValue = $(this).next();
        let parent = $(this).closest('.cart-item');
        if(spinnerValue.val() > 1) {
            let newValue = spinnerValue.val() - 1;
            spinnerValue.val(parseInt(newValue.toString()));
            shop_operation('add-cart',parent.attr('id'),newValue);
            updateCheckout();
        }
    });
    $(".horizontal-spinner .spinner-increment").on('click',function () {
        let spinnerValue = $(this).prev();
        let newValue = parseInt(spinnerValue.val()) + 1;
        let parent = $(this).closest('.cart-item');
        spinnerValue.val(parseInt(newValue));
        shop_operation('add-cart',parent.attr('id'),newValue);
        updateCheckout();
    });
});
function shop_operation(type,id,count = 1) {
    let response = null
    $.ajax({
        url: 'api/UserShop.php',
        method: 'POST',
        data: {
            type: type,
            product_id: id,
            count: count,
        },
        success: function(data) {
            response = data;
            console.log(data);
        },
        error: function(error) {
            console.log('Error:', error);
            response = 'Bad Request';
        }
    });
    return response !== 'Bad Request';
}
function fav_product(element,id) {
    event.stopPropagation();
    if(element.innerText === "favorite_outline") {
        if(shop_operation('add-fav',id)) {
            element.innerText = "favorite";
        }

    } else {
        if(shop_operation('remove-fav',id)) {
            element.innerText = "favorite_outline";
        }
    }
}
function cart_product(element,id,count= 1) {
    event.stopPropagation();
    if(element.classList.contains("material-icons-outlined")) {
        if(shop_operation('add-cart',id,count)) {
            element.classList.remove("material-icons-outlined");
            element.classList.add("material-icons");
        }
    } else {
        if(shop_operation('remove-cart',id,count)) {
            element.classList.add("material-icons-outlined");
            element.classList.remove("material-icons");
        }
    }
}
