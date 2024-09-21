<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<?php 
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM products WHERE p_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    
<div class="content">
        <div class="row justify-content-center mt-2">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header bg-danger" style="text-align: center;">Edit Form</div>
                <h3>Add Product</h3>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" class="form-control" name="name" value="<?= $row['p_name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description:</label>
                            <textarea type="text" id="" rows="2" name="desc" class="form-control" required><?= $row['p_desc']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" name="price" value="<?= $row['p_price']; ?>" required>
                        </div>

                        <div class="form-group mt-2">
                            <input type="hidden" name="updateId" value="<?= $row['p_id']; ?>">
                            <!-- edit korbe ai ta -->
                            <button type="submit" class="btn btn-primary" >Update</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>