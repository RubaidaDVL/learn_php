<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'testing');
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

    <header class="bg-secondary">
        Product CRUD
    </header>
    <div class="content-wrapper">
        <div class="row justify-content-center mt-2">
            <div class="col-8">
                <div class="content mt-2">

                <h3 style="text-align: center;" class="bg-secondary">Product List</h3>

                <div class="mt-2">
                    <a type="submit" class="btn btn-primary" href="table.php">Add New Product
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $serial = 1;
                            foreach ($data as $row) {  ?>
                                <tr>
                                    <td><?= $serial++; ?></td>
                                    <td><?= $row['p_name']; ?></td>
                                    <td><?= $row['p_category']; ?></td>
                                    <td><?= $row['p_desc']; ?></td>
                                    <td><?= $row['p_price'] ;?></td>
                                    <td>
                                        <?php
                                        if($row['p_image']) { ?>
                                        <img src="images/<?= $row['p_image'] ; ?>" height="50" width="50" srcset="">
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a type="submit" class="btn btn-sm btn-primary mr-2" href="edit.php?id=<?= $row['p_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                        <a type="button" class="btn btn-sm btn-danger" href="action.php?deleteId=<?= $row['p_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php  } ?>

                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>