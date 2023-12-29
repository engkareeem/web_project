<?php
include_once __DIR__ . '/../DBApi.php';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['filter'])) {
    $filter = $_POST['filter'];
    if($filter === 'all') generateProducts();
     else generateProducts(['category' => $_POST['filter']]);
}
function generateProducts($filter=[],$order=[]):void {
    $products = DBApi::getAllProducts($filter,$order);
    $user = DBApi::ensureLogin();
    $cart = DBApi::getCart();
    $content = '';
    foreach($products as $product) {
        $fav='fa-regular';
        $shCart = 'fa-regular';
        if($user->username !== null) {
            $fav = in_array($product->_id,iterator_to_array($user->favoritesList)) ? 'fa-solid':'fa-regular';
            $shCart = array_key_exists((string)$product->_id,$cart) ? 'fa-solid':'fa-regular';
        }
        $content .= "<div class=\"card-item\" onclick=\"location.href = 'product_view.php?product_id=$product->_id'\">
                <img src=\"api/getImage.php?id={$product->imageID}\" alt=\"image\">
                <div class=\"actions\">
                    <div class=\"icon $fav fa-heart\" onclick='fav_product(this,\"{$product->_id}\")'></div>
                    <div class=\"add-to-cart-button icon $shCart fa-cart-shopping\" onclick='cart_product(this,\"$product->_id\")'></div>
                    
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
    $content .= "<script>
   
</script>";
    echo $content;

}

function generateCustomProducts($products):void {

    foreach($products as $productID) {
        $product = DBApi::getProductByID($productID);
        echo "<div class=\"card-item\" onclick=\"location.href = 'product_view.php?product_id=$productID'\">
                <img src=\"api/getImage.php?id={$product->imageID}\" alt=\"image\">
                <div class=\"actions\">
                    <div class=\"icon material-icons\" onclick='fav_product(this,\"{$productID}\")'>favorite_outline</div>
                    <div class=\"add-to-cart-button icon material-icons-outlined\" onclick='cart_product(this,\"$productID\")'>shopping_cart</div>
                    
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