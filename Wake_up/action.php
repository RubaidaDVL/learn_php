<?php
session_start();
$name = $_POST['name'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$rel = $_POST['rel'];
$nation = $_POST['nation'];
$email = $_POST['email'];
$edu = $_POST['edu'];
$updateId = $_POST['updateId'];
$deleteId = $_GET['deleteId'];

$conn = mysqli_connect('localhost', 'root', '', 'testing');

if ($deleteId) {
    $sql = "DELETE FROM wake WHERE w_id = $deleteId";
    $_SESSION['flash_data'] = "Your data has been deleted!";
} else if ($updateId) {

    $sql = "UPDATE wake SET w_name = '$name',w_gender = '$gender',w_birth = '$birth',w_fname = '$fname',w_mname = '$mname',w_rel = '$rel',w_nation = '$nation',w_email = '$email',w_edu = '$edu'  WHERE w_id = $updateId";
    $_SESSION['flash_data'] = "Your data has been updated!";
} else {

    $sql = "INSERT INTO wake (w_name,w_gender,w_birth,w_fname,w_mname,w_rel,w_nation,w_email,w_edu) VALUES ('$name','$gender','$birth','$fname','$mname','$rel','$nation','$email','$edu')";
    $_SESSION['flash_data'] = "Your data has been inserted!";
}

$conn->query($sql);


header("Location: index.php");
?>
