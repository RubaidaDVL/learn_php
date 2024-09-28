<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<header class="bg-secondary">
<h1> WakeUp ICT</h1>
    </header>

    <div class="content">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info" style="text-align: center;">
                            <h4>Add Member</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" required >
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <select name="category" id="form-control" class="form-control" > 
                                    <option value="">Select Category</option>
                                    <option value="graphics_designer">Graphics Designer</option>
                                    <option value="web_developer">Web Developer</option>
                                    <option value="account_manager">Account Manager</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exp">Experience:</label>
                                <textarea class="form-control" name="exp" id="" rows="2" required>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary:</label>
                                <input type="number" class="form-control" name="salary" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" name="image" >
                            </div>
                            

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
        </form>
    </div>
</body>
</html>