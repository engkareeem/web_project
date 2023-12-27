<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Dashboard</title>
</head>
<body>
<?php include './components/admin-navbar.php' ?>
<div class="dashboard-title">Dashboard</div>
<div class="dashboard-body">
    <div id="total-profit">Profit Income: <br> <span id="total-profit-val">2,500$</span></div>
    <div id="total-products">Total Number of Products: <br> <span id="total-products-val">7214</span></div>
    <div id="stock-products">Number of Products In Stock: <br> <span id="stock-products-val">6251</span></div>
    <div id="total-users">Users: <br> <span id="total-users-val">22</span></div>
    <div id="sold-products">Sold Products: <br> <span id="sold-products-val">1523</span></div>

    <div id="total-admins">Admins: <br> <span id="total-admins-val">14</span></div>
</div>

<?php include './components/admin-footer.php' ?>



</body>
</html>