<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!--   <script src="https://unpkg.com/@rive-app/canvas@2.7.0"></script>-->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/product_view.js"></script>
</head>
<body>

<?php include './components/navbar.php' ?>

<div class="product-view-container">
    <div class="image-container">
        <img src="https://cdn.originpc.com/img/compare-all/gaming-desktops/genesis-7000-series-system-image.png" alt="zbr">
    </div>
    <div class="information-container">

        <div class="header">
            <h1>Title</h1>
            <div class="header-actions">
                <div class="icon material-icons">favorite_outline</div>
            </div>
        </div>
        <div class="rating-container">
            <div class="icon material-icons">star</div>
            <div class="icon material-icons">star</div>
            <div class="icon material-icons">star</div>
            <div class="icon material-icons">star</div>
            <div class="icon material-icons">star_half</div>
            <div class="reviews">(69 Reviews)</div>
        </div>
        <div class="description">
            Suspendisse finibus ultricies ultrices. Suspendisse ac purus eget nisi elementum sagittis. Suspendisse potenti. Curabitur quis sapien rutrum, vulputate enim in, commodo ex. Ut quis ipsum nec ex facilisis imperdiet facilisis in orci. Maecenas lacinia at ante at iaculis. Curabitur vel ultricies lacus. Nunc luctus massa at tellus fringilla, ac maximus ante fermentum. Praesent ac semper tellus. Cras rhoncus auctor sapien in sagittis.
        </div>
        <div class="buying-container">
            <div class="price-container">
                <div class="price-label">
                    Price: 69.09$
                </div>
            </div>
            <div class="actions-container">
                <div id="add-to-cart-button" class="btn btn-outline-primary">Add to Cart</div>
                <div id="buy-now-button" class="btn btn-primary">Buy Now</div>
            </div>
        </div>

    </div>
</div>

<?php include './components/footer.php' ?>
<style>
    #footer {
        width: 100%;
    }
</style>

</body>
</html>