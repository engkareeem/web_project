<?php
include_once 'DBApi.php';
//$title, $description, $price, $category, $imageID, $stock
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['title'],$_POST['description'],$_POST['price'],$_POST['category'],$_POST['stock'])) {
        echo 'Please fill all fields.';
        exit;
    }
    if(!isset($_FILES['file'])) {
        echo 'Please attach an image';
        exit;
    }

    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);
    $category = htmlspecialchars($_POST['category']);
    $stock = htmlspecialchars($_POST['stock']);
    $imageID = -1;

    if(strlen($title) < 3 || strlen($title) > 30) {
        echo 'username must be shorter than 30 and longer than 3 characters';
        exit;
    }
    if(!is_numeric($price) || $price < 1) {
        echo 'Invalid price';
        exit;
    }
    if(!is_numeric($stock) || $stock < 1) {
        echo 'Invalid stock number';
        exit;
    }

    $price = (int)$price;
    $stock = (int)$stock;

    $uploadedFile = $_FILES['file'];

    $response = DBApi::uploadImage($uploadedFile);
    if($response == APIResponse::INVALID_IMAGE) {
        echo 'Please attach an valid image..';
        exit;
    } else if($response == APIResponse::ERROR) {
        echo 'Error occurred while uploading the image';
        exit;
    } else {
        $imageID = $response;
    }

    $response = DBApi::addProduct($title,$description,$price,$category,$imageID,$stock);
    if($response == APIResponse::ERROR) {
        echo 'Something goes wrong..';
    } else {
        echo 'success';
    }

}


?>