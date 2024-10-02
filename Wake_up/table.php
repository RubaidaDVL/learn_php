<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
<header class="bg-info">
<h1 style="text-align: center;"> WakeUp ICT</h1>
    </header>

    
    <div class="content">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info" style="text-align: center;">
                            <h4>Add Information</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name"> Student Name:</label>
                                <input type="text" class="form-control" name="name" required >
                            </div>
                            <div class="form-group">
                                <label for="gender"> Gender:</label><br>

                                <input type="checkbox" class="form-check-input" id="gender1" name="gender">
                                <label for="gender">Female</label><br>
                                <input type="checkbox" class="form-control" id="gender2" name="gender">
                                <label for="gender">Male</label><br>
                            </div>
                            <div class="form-group">
                                <label for="birth">Date of Birth:</label>
                                <input type="date" class="form-control" name="birth" required >
                            </div>
                            <div class="form-group">
                                <label for="fname">Father's Name:</label>
                                <input type="text" class="form-control" name="fname" required >
                            </div>
                            <div class="form-group">
                                <label for="mname">Mother's Name:</label>
                                <input type="text" class="form-control" name="mname" required >
                            </div>
                            <div class="form-group">
                                <label for="rel">Religion:</label>
                                <input type="text" class="form-control" name="rel" required>
                            </div>
                            <div class="form-group">
                                <label for="nation">Nationality:</label>
                                <input type="text" class="form-control" name="nation" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail Address:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="edu">Educational Qualification:</label>
                                <input type="text" class="form-control" name="edu" required>
                            </div>
                            

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">Submit Data</button>
                            </div>
    
</body>
</html>