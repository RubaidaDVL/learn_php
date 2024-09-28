<?php
session_start();
$name = $_POST['name'];
$category = $_POST['category'];
$exp = $_POST['exp'];
$salary = $_POST['salary'];
$updateId = $_POST['updateId'];
$deleteId = $_GET['deleteId'];



$conn = mysqli_connect('localhost', 'root', '', 'testing');

if ($deleteId) {
    $sql = "DELETE FROM product WHERE p_id = $deleteId";
    $_SESSION['flash_data'] = "Your data has been deleted!";
} else if ($updateId) {
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target_dir = "images/";
        $target_file =  $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $image = $_POST['oldImage'];
    }
    $sql = "UPDATE product SET p_name = '$name',p_category = '$category',p_exp = '$exp',p_salary = '$salary',p_image = '$image'  WHERE p_id = $updateId";
    $_SESSION['flash_data'] = "Your data has been updated!";
} else {
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target_dir = "images/";
        $target_file =  $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $image = '';
    }
    $sql = "INSERT INTO product (p_name,p_category,p_exp,p_salary,p_image) VALUES ('$name','$category','$exp','$salary','$image')";
    $_SESSION['flash_data'] = "Your data has been inserted!";
}

$conn->query($sql);


header("Location: index.php");
?>