<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>Profile</title>
    <script src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include_once 'api/DBApi.php';
include './components/navbar.php';
$user = DBApi::ensureLogin();
$isLogged = $user->username !== null;
if(!$isLogged) {
    echo "
        <script>
            $(() => {
                location.href = \"index.php\";
            });
        </script>
    ";
}
?>


<div class="profile-body">
    <div class="info-card">
        <img src="/src/profile-img.jpg" alt="" class="profile-img">
        <div class="username"><?php echo $user->username?></div>
        <div class="email"><?php echo $user->email?></div>
        <button class="edit-profile" type="button" data-bs-toggle="modal" data-bs-target="#edit-data-modal">Edit Profile</button>
        <button class="logout-profile" type="button" id="logoutButton">Log out</button>
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

<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/profile-page.js"></script>

<script>
    $(() => {
       $("#logoutButton").click(function () {
           $.ajax({
               url: 'api/logout.php',
               method: 'POST',
               success: function(data) {
                   if(data === "success") {
                       location.href = "index.php";
                   }
               },
               error: function(error) {
                   console.log('Error:', error);
               }
           });
       });
    });
</script>
</body>
</html>