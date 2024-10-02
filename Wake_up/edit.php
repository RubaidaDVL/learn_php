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
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM wake WHERE W_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    
<header class="bg-info">
<h1 style="text-align: center;"> WakeUp ICT</h1>
    </header>

    
    <div class="content">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info" style="text-align: center;">
                            <h4>Update</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name"> Student Name:</label>
                                <input type="text" class="form-control" name="name" required value="<?= $row['w_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="gender"> Gender:</label><br>

                                <input type="checkbox" id="form-control"  name="gender" value="Female" value="<?= $row['w_gender']; ?>">
                                <label for="gender">Female</label><br>
                                <input type="checkbox" id="form-control"  name="gender" value="Male" value="<?= $row['w_gender']; ?>">
                                <label for="gender">Male</label><br>
                            </div>
                            <div class="form-group">
                                <label for="birth">Date of Birth:</label>
                                <input type="date" class="form-control" name="birth" required value="<?= $row['w_birth']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="fname">Father's Name:</label>
                                <input type="text" class="form-control" name="fname" required value="<?= $row['w_fname']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="mname">Mother's Name:</label>
                                <input type="text" class="form-control" name="mname" required value="<?= $row['w_mname']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="rel">Religion:</label>
                                <input type="text" class="form-control" name="rel" required value="<?= $row['w_rel']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nation">Nationality:</label>
                                <input type="text" class="form-control" name="nation" required value="<?= $row['w_nation']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail Address:</label>
                                <input type="email" class="form-control" name="email" required value="<?= $row['w_email']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="edu">Educational Qualification:</label>
                                <input type="text" class="form-control" name="edu" required>
                            </div>
                        
                            <div class="form-group mt-4">
                                <input type="hidden" name="updateId" value="<?= $row['w_id']; ?>">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>