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
    <script src="js/generateTest.js"></script>
    <link rel="stylesheet" href="styles/pages/shopping_cart.css">
</head>
<body>

<?php include './components/navbar.php' ?>


<div class="cart-view-container">
    <div class="header"><div class="icon material-icons">shopping_cart</div>  Shopping Cart</div>
    <div class="cart-container">

    </div>
    <div class="checkout-container">
        <div class="title">Checkout</div>
        <div class="details">
            <div class="items-price">Items price: <span class="amount">69$</span></div>
            <div class="fees">Total fees: <span class="amount">0.9$</span></div>
            <div class="discounts">Discounts: <span class="amount">0.3$</span></div>
            <div class="total-price">Total Price <span class="amount">68.4$</span></div>
        </div>
        <div class="btn btn-primary">Checkout</div>
        <div></div>
    </div>

</div>
<?php include './components/footer.php' ?>
<style>
    #footer {
        width: 100%;
    }
</style>
<script src="js/main.js"></script>

</body>
</html>