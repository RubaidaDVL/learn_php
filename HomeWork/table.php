<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <header class="bg-secondary">
        Product CRUD
    </header>

    <div class="content">
        <form action="index.php" method="POST">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Product</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Product Name:</label>
                                <input type="text" class="form-control" name="" required>
                            </div>
                            <div class="form-group">
                                <label for="desc">Description:</label>
                                <textarea class="form-control" name="" id="" rows="2" required>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" class="form-control" name="" required>
                            </div>

                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
        </form>
    </div>

</body>

</html>