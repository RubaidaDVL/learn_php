<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    ?>

    <header class="bg-secondary">
        <h1> WakeUp ICT</h1>
    </header>
    <div class="content-wrapper">
        <div class="row justify-content-center mt-2">
            <div class="col-8">

                    <?php

                    if (isset($_SESSION['flash_data'])) { ?>
                       <div class="alert alert-info alert-dismissible fade show">
                            <?= $_SESSION['flash_data']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['flash_data']); ?>
                    <?php } ?>

                    <h3 style="text-align: center;" class="bg-secondary">Member List</h3>

                    <div class="mt-2">
                        <a type="submit" class="btn btn-primary" href="table.php">Add Member
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Experience</th>
                                    <th>Salary</th>
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
                                        <td>
                                            <?php
                                            if ($row['p_category'] == "graphics_designer") {
                                                echo "Graphics Designer";
                                            } elseif ($row['p_category'] == "web_developer") {
                                                echo "Web Developer";
                                            } elseif ($row['p_category'] == "account_manager") {
                                                echo "Account Manager";
                                            }
                                            ?></td>
                                        <td><?= $row['p_exp']; ?></td>
                                        <td><?= $row['p_salary']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['p_image']) { ?>
                                                <img src="images/<?= $row['p_image']; ?>" height="50" width="50" srcset="">
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a type="submit" class="btn btn-sm btn-primary mr-2" href="edit.php?id=<?= $row['p_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                            <a type="button" class="btn btn-sm btn-danger" href="action.php?deleteId=<?= $row['p_id']; ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fas fa-trash-alt"></i> Delete</a>
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