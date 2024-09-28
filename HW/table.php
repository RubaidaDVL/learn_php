<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    
</head>
<body>
    
    
<header class="bg-secondary">
        Product CRUD
    </header>

    <div class="content">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info" style="text-align: center;">
                            <h4>Add Product</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Product Name:</label>
                                <input type="text" class="form-control" name="name" required >
                            </div>
                            <div class="form-group">
                                <label for="category">Product Category:</label>
                                <select name="category" class="form-control" id="form-control">
                                    <option value="">Select Category</option>
                                    <option value="electronics">Electronics</option>
                                    <option value="accessories">Accessories</option>
                                    <option value="clothing">clothing</option>
                                    <option value="furniture">Furniture</option>
                                    <option value="makeup">MakeUp</option>
                                    <option value="books">Books</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="desc">Description:</label>
                                <textarea class="form-control" name="desc" id="" rows="2" required>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" class="form-control" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
        </form>
    </div>
</body>
</html>