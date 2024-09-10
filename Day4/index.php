<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <form action="<?php
                                        echo $_SERVER['PHP_SELF'];
                                        ?>" method="GET">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" required="name">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile No. :</label>
                                <input type="text" class="form-control" required name="mobile">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="text" class="form-control" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="text" class="form-control" required name="password">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" required name="address">
                            </div>
                            <div class="form-group">
                                <label for="sclname">School Name:</label>
                                <input type="text" class="form-control" required name="sclname">
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-warning" value="Submit">
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'tropping');

            $name = $_GET['name'];
            $mobile = $_GET['mobile'];
            $email = $_GET['email'];
            $password = $_GET['password'];
            $address = $_GET['address'];
            $sclname = $_GET['sclname'];

            $sql = "INSERT INTO testing (u_name, u_mobile, u_email, u_password, u_address, u_sclname) VALUES ('$name','$mobile','$email','$password','$address','$sclname')";

            $conn->query($sql);

            echo "Succesfully Inserted";
            ?>

            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'tropping');
            $sql = "SELECT * FROM testing";
            $result = $conn->query($sql);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            ?>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>SL.</td>
                                <td>Name</td>
                                <td>Mobile no.</td>
                                <td>E-mail</td>
                                <td>Password</td>
                                <td>Address</td>
                                <td>School Name</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            $serial = 1;
                            foreach ($data as $row) {  ?>
                                <tr>
                                    <td><?= $serial++; ?></td>
                                    <td><?= $row['u_name']; ?></td>
                                    <td><?= $row['u_mobile']; ?></td>
                                    <td><?= $row['u_email']; ?></td>
                                    <td><?= $row['u_password']; ?></td>
                                    <td><?= $row['u_address']; ?></td>
                                    <td><?= $row['u_sclname']; ?></td>
                                </tr>

                            <?php }  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>