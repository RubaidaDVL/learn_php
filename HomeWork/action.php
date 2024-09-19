<?php 
$conn = mysqli_connect('localhost', 'root', '', 'product');

$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$updateId = $_POST['updateId'];
$deleteId = $_GET['deleteId'];

if ($deleteId) {
    $sql = "DELETE FROM users WHERE u_id = $deleteId";
    $conn->query($sql);
}

if ($updateId) {
    $sql = "UPDATE users SET u_name = '$name',u_desc = '$desc',u_price = '$price' WHERE u_id = $updateId";
    $conn->query($sql);
}
else{
    $sql = "INSERT INTO users (u_name,u_desc,u_price) VALUES ('$name','$desc','$price')";
    $conn->query($sql);
}



header("Location: index.php");
?>