<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--   <script src="https://unpkg.com/@rive-app/canvas@2.7.0"></script>-->
    <script src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="blue-circle"></div>
<div class="blue-circle"></div>
<?php
include_once 'api/DBApi.php';
include_once 'api/generate/products.php';
include './components/navbar.php';
?>



<div class="products-grid-view-container">
    <ul class="filter-bar">
        <li><div class="active" onclick="changeFilter(this,'all')">All</div></li>
        <li><div onclick="changeFilter(this,'components')">Components</div></li>
        <li><div onclick="changeFilter(this,'laptops')">Laptops</div></li>
        <li><div onclick="changeFilter(this,'computers')">Computers</div></li>
        <li><div onclick="changeFilter(this,'accessors')">Accessors</div></li>
    </ul>
    <div class="products-grid-view" id="products-grid-view">
        <?php
            generateProducts();
        ?>
    </div>
</div>

<?php include './components/footer.php' ?>


<!--<script src="js/generateTest.js"></script>-->
<script src="js/product.js"></script>
<script src="js/main.js"></script>
<script src="js/product.js"></script>
</body>
</html>