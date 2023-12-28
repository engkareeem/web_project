<?php

function generateProducts($filter=[],$order=[]):void {
    $products = DBApi::getAllProducts($filter,$order);
    foreach($products as $product) {
        echo "<div class=\"card-item\" onclick=\"location.href = 'product_view.php?product_id=$product->_id'\">
                <img src=\"api/getImage.php?id={$product->imageID}\" alt=\"image\">
                <div class=\"actions\">
                    <div class=\"icon material-icons\" onclick='fav_product(this,\"{$product->_id}\")'>favorite_outline</div>
                    <div class=\"add-to-cart-button icon material-icons-outlined\" onclick='cart_product(this,\"$product->_id\")'>shopping_cart</div>
                    
                </div>
                <div class=\"header\">
                    <div class=\"title\">
                        $product->title
                    </div>
                    <div class=\"price\">
                        $product->price$
                    </div>
                </div>
            </div>";
    }
}

?>