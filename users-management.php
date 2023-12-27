<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Products</title>

</head>
<body>
<?php include './components/admin-navbar.php' ?>
<div class="users-mgm-title">Users</div>
<div class="users-mgm-body">
    <div id="user-form-wrapper">
        <div class="form-title">User Account Information</div>
        <form method="post" enctype="multipart/form-data" id="user-form">
            <div class="data-box">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Name of the user" disabled>
            </div>


            <div class="data-box">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="User email" disabled>
            </div>


            <div class="data-box">
                <label for="dataCreated">Account Created Since:</label>
                <input type="date" id="dataCreated" name="dataCreated" disabled>
            </div>


            <div class="data-box">
                <label for="numOfProducts">Products Bought:</label>
                <input type="number" id="discount" name="numOfProducts"  value="0" disabled>
            </div>

            <br>
            <button type="submit" class="deactive-btn" disabled>Deactivate this Account</button>
        </form>
    </div>
    <div class="users-list-card">
        <div class="user-item">
            <div class="img-container">
                <img src="src/profile-img.jpg" alt="...">
            </div>
            <div class="user-item-title">nasrallah</div>
        </div>
        <div class="user-item">
            <div class="img-container">
                <img src="src/profile-img.jpg" alt="...">
            </div>
            <div class="user-item-title">kareem</div>
        </div>

    </div>
</div>

<?php include './components/admin-footer.php' ?>

<script>
    $(".user-item").click(function (){
        $(this).toggleClass("selected");
        $(this).siblings().removeClass("selected");
        const addBtn = $(".deactive-btn");
        if($(this).hasClass("selected")){
            addBtn.prop("disabled", false);

        }else{
            addBtn.prop("disabled", true);


        }
    })
</script>

</body>
</html>