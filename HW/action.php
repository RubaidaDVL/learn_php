<?php
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$updateId = $_POST['updateId'];
$deleteId = $_GET['deleteId'];
$category = $_POST['category'];


$conn = mysqli_connect('localhost', 'root', '', 'testing');

if ($deleteId) {
    $sql = "DELETE FROM products WHERE p_id = $deleteId";
} else if ($updateId) {
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target_dir = "images/";
        $target_file =  $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $image = $_POST['oldImage'];
    }
    $sql = "UPDATE products SET p_name = '$name',p_category = '$category',p_desc = '$desc',p_price = '$price',p_image = '$image'  WHERE p_id = $updateId";
} else {
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target_dir = "images/";
        $target_file =  $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $image = '';
    }
    $sql = "INSERT INTO products (p_name,p_category,p_desc,p_price,p_image) VALUES ('$name','$category','$desc','$price','$image')";
}

$conn->query($sql);


header("Location: index.php");
