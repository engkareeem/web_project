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
<div class="products-mgm-title">Products</div>
<div class="products-mgm-body">
    <div id="product-form-wrapper">
        <div class="form-title">Product Information</div>
        <form method="post" enctype="multipart/form-data" id="product-form">
            <div class="data-box">
                <label for="title">Product Title:</label>
                <input type="text" id="title" name="title" placeholder="Name of the product" required>
            </div>


            <div class="data-box">
                <label for="price">Price <span style="font-size: 14px; font-weight: bold">( $ ) </span>:</label>
                <input type="number" id="price" name="price" min="0" step="50" value="0" required>
            </div>


            <div class="data-box">
                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="stock" min="0" step="1" value="0" required>
            </div>


            <div class="data-box">
                <label for="discount">Discount <span style="font-size: 14px; font-weight: bold">( % ) </span>:</label>
                <input type="number" id="discount" name="discount" min="0" step="5" value="0" required>
            </div>
            <div class="data-box">
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Enter descriptive information about the product" required></textarea>
            </div>

            <div class="data-box">
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category2">Category 3</option>
                    <option value="category2">Category 4</option>
                </select>
            </div>

            <div class="data-box">
                <label for="image">Image <span style="font-size: 14px; font-weight: bold">(PNG, JPG, JPEG) </span>:</label>
                <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" required>
            </div>

            <br>
            <button type="submit" class="add-btn">Add Product</button>
            <button type="submit" class="update-btn " disabled>Update</button>
            <button type="submit" class="delete-btn " disabled>Delete</button>
        </form>
    </div>
    <div class="products-list-card">
        <div class="product-item">
            <div class="img-container">
                <img src="https://cdn.originpc.com/img/compare-all/gaming-desktops/genesis-7000-series-system-image.png" alt="...">
            </div>
            <div class="product-item-title">Brand new computer</div>
        </div>

        <div class="product-item">
            <div class="img-container">
                <img src="https://cdn.originpc.com/img/compare-all/gaming-desktops/genesis-7000-series-system-image.png" alt="...">
            </div>
            <div class="product-item-title">Brand new computer</div>
        </div><div class="product-item">
            <div class="img-container">
                <img src="https://cdn.originpc.com/img/compare-all/gaming-desktops/genesis-7000-series-system-image.png" alt="...">
            </div>
            <div class="product-item-title">Brand new computer</div>
        </div><div class="product-item">
            <div class="img-container">
                <img src="https://cdn.originpc.com/img/compare-all/gaming-desktops/genesis-7000-series-system-image.png" alt="...">
            </div>
            <div class="product-item-title">Brand new computer</div>
        </div><div class="product-item">
            <div class="img-container">
                <img src="https://cdn.originpc.com/img/compare-all/gaming-desktops/genesis-7000-series-system-image.png" alt="...">
            </div>
            <div class="product-item-title">Brand new computer</div>
        </div>
    </div>
</div>

<?php include './components/admin-footer.php' ?>

<script>
    $(".product-item").click(function (){
        $(this).toggleClass("selected");
        $(this).siblings().removeClass("selected");
        const addBtn = $(".add-btn");
        const updateBtn = $(".update-btn");
        const deleteBtn = $(".delete-btn");
        if($(this).hasClass("selected")){
            addBtn.prop("disabled", true);
            updateBtn.prop("disabled", false);
            deleteBtn.prop("disabled", false);
        }else{
            addBtn.prop("disabled", false);
            updateBtn.prop("disabled", true);
            deleteBtn.prop("disabled", true);

        }
    })
</script>

</body>
</html>