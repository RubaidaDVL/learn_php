<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<!-- <a type="submit" class="btn btn-sm btn-warning mr-2" href="edit.php?id=<?= $row['u_id']; ?>"><i class="fas fa-edit"></i> Edit</a> -->
<body>

<header class="bg-secondary">
        Product CRUD
    </header>
<div class="content">
        <div class="row justify-content-center mt-2">
            <div class="col-6">
            <!-- <div class="card"> -->
               
                <h3>Product List</h3>
                
                <div class="mt-2">
                            <a type="submit" class="btn btn-primary" href="table.php?id=<?= $row['u_id']; ?>">Add New Product
                            </a>
                        </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                               <th>Action</th>
                            
                            </tr>
                        </thead>
                        <!-- <tbody>
                            <?php
                            $serial = 1;
                            foreach ($data as $row) {  ?>
                                <tr>
                                    <td><?= $serial++; ?></td>
                                    <td><?= $row['u_name']; ?></td>
                                    <td><?= $row['u_desc']; ?></td>
                                    <td><?= $row['u_price']; ?></td>
                                    <td>
                                        <a type="submit" class="btn btn-sm btn-warning mr-2" href="edit.php?id=<?= $row['u_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                        <a type="button" class="btn btn-sm btn-danger" href="action.php?deleteId=<?= $row['u_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php  } ?>

                        </tbody> -->
                    </table>
                </div>
            <!-- </div> -->
            </div>
            </div>
            </div>
</body>
</html>