<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!--   <script src="https://unpkg.com/@rive-app/canvas@2.7.0"></script>-->
    <script src="js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="styles/pages/shopping_cart.css">
</head>
<body>

<?php
include './components/navbar.php';
include_once 'api/DBApi.php';

if($_SERVER['REQUEST_METHOD'] === 'GET') {

    global $user,$cart,$totalItemsPrice,$totalPrice,$fees;
    $cart = [];
    $totalItemsPrice = 0;
    $fees = 0.5;
    $totalPrice = $fees; // fees
    $user = DBApi::ensureLogin();
    global $isBuyNow;
    $isBuyNow = false;
    if($user->username === null) {
        echo "
        <script>
            $(() => {
                location.href = \"index.php\";
            });
        </script>
        ";
    }
    if(isset($_GET['product_id'])) {
        $product = DBApi::getProductByID($_GET['product_id']);
        if($product->title !== null) {
            $cart['658c2a87417e7ee2ea2a9e0b'] = 1;
            $isBuyNow = true;
        }
    } else {
        $cart = DBApi::getCart();
    }
}
?>


<div class="cart-view-container">
    <div class="header" id="#cart-header"><div class="icon material-icons">shopping_cart</div>  Shopping Cart</div>
    <div class="cart-container" >
        <?php
        if(empty($cart)) {
            echo "<div class='header' style='margin-left: 10px;'>Empty</div>";
        }
            foreach($cart as $productId => $count) {
                $product = DBApi::getProductByID($productId);
                if($product->title === null) continue;
                $price = $product->price * $count;
                $totalItemsPrice += $price;
                $totalPrice += $price - $price * $product->discount;
                echo "
            <div class='cart-item' id='$product->id'>
    <div class='img-container'>
        <img src='api/getImage.php?id=$product->imageID' alt='image'>
    </div>
    <div class='description'>
        <div class='title'>$product->title</div>";
                    if($product->discount > 0) {
                        $price = $product->price - $product->price*$product->discount;
                        echo " <div class='price'><s>Price: $product->price$</s><br>Price: $price$</div>";
                    } else {
                        echo " <div class='price'>Price: $product->price$</div>";
                    }

                echo "</div>";
                if(!$isBuyNow) echo "
    <div class='price-quantity-container'>
        <div class='item-price'>
            <span class='item-price-amount' discount='$product->discount'>$product->price</span>$ x
        </div>
        <div class='horizontal-spinner'>
            <button class='spinner-decrement'>&lt;</button>
            <input type='number' class='spinner-value' value='$count' min='1' readonly>
            <button class='spinner-increment'>&gt;</button>
        </div>
    </div>
    <div class='icon-button'>
        <div class='icon material-icons'>delete</div>
    </div>
     ";
          echo "</div>";


            }
        ?>
    </div>

    <div class="checkout-container">
        <div class="title">Checkout</div>
        <div class="details">
            <div class="items-price">Items price: <span class="amount"><?php echo $totalItemsPrice?></span>$</div>
            <div class="fees">Total fees: <span class="amount"><?php echo $fees?></span>$</div>
            <div class="discounts">Discounts: <span class="amount"><?php echo $totalItemsPrice - $totalPrice + $fees?></span>$</div>
            <div class="total-price">Total Price <span class="amount"><?php echo $totalPrice?></span>$</div>
        </div>
        <button class="btn btn-primary" onclick="checkout('<?php echo $_GET['product_id'] ?>')" disabled="<?php empty($cart)?>">Checkout</button>

    </div>

</div>

<script src="js/product.js"></script>

<script src="js/main.js"></script>


<?php include './components/footer.php' ?>
<style>
    #footer {
        width: 100%;
    }
</style>

</body>
</html>