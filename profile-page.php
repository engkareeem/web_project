<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
<?php include './components/navbar.php' ?>


<div class="profile-body">
    <div class="info-card">
        <img src="/src/profile-img.jpg" alt="" class="profile-img">
        <div class="username">Godvictory</div>
        <div class="email">shaer.nasrallah@gmail.com</div>
        <button class="edit-profile" type="button" data-bs-toggle="modal" data-bs-target="#edit-data-modal">Edit Profile</button>
        <button class="logout-profile" type="button" >Log out</button>
    </div>
    <div class="data-card">
        <ul class="sub-nav">
            <li class="active"><a href="#">Purchased</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Favorites</a></li>
        </ul>
        <div class="tabs-box">
            <div class="products-grid-view"></div>
        </div>
    </div>

</div>
<?php include './components/footer.php' ?>
<style>
    #footer {
        width: 100%;
    }
</style>

<script src="js/generateTest.js"></script>
<script src="js/profile-page.js"></script>
</body>
</html>