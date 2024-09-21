<?php  
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$updateId = $_POST['updateId'];
$deleteId = $_GET['deleteId'];

$conn = mysqli_connect('localhost', 'root', '', 'testing');


 if ($deleteId) {
     $sql = "DELETE FROM products WHERE p_id = $deleteId";
}else if ($updateId) {
    $sql = "UPDATE products SET p_name = '$name',p_desc = '$desc',p_price = '$price' WHERE p_id = $updateId";
}else{
    $sql = "INSERT INTO products (p_name,p_desc,p_price) VALUES ('$name','$desc','$price')";
}
$conn->query($sql);


header("Location: index.php");

?>
