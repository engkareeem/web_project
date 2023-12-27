<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php include './components/admin-navbar.php' ?>
<div class="products-mgm-title">Products</div>
<div class="products-mgm-body">
    <form id="productForm" enctype="multipart/form-data">
        <label for="title">Product Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0" required>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
            <!-- Add more options as needed -->
        </select>

        <label for="image">Image (PNG, JPG, JPEG):</label>
        <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" required>

        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount" min="0" required>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" min="0" required>

        <button type="submit">Submit</button>
    </form>
</div>

<?php include './components/admin-footer.php' ?>



</body>
</html>