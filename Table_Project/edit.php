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
    $sql = "SELECT * FROM product WHERE p_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>


    <header class="bg-secondary">
    <h1> WakeUp ICT</h1>
    </header>


    <div class="content">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center mt-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info" style="text-align: center;">
                            <h4>Update Your Information</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" required value="<?= $row['p_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <select name="category" class="form-control" id="form-control" value="<?= $row['p_category']; ?>">
                                    <option value="">Select Category</option>
                                    <option value="graphics_designer">Graphics Designer</option>
                                    <option value="web_developer">Web Developer</option>
                                    <option value="account_manager">Account Manager</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exp">Experience:</label>
                                <textarea class="form-control" name="exp" id="" rows="2" required> <?= $row['p_exp']; ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary:</label>
                                <input type="number" class="form-control" name="salary" required value="<?= $row['p_salary']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" name="image">
                                <?php
                                if ($row['p_image']) { ?>
                                    <img src="images/<?= $row['p_image']; ?>" height="50" width="50" srcset="">
                                <?php } ?>
                            </div>

                            <div class="form-group mt-4">
                                <input type="hidden" name="oldImage" value="<?= $row['p_image']; ?>">
                                <input type="hidden" name="updateId" value="<?= $row['p_id']; ?>">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('catagory').var("<?= $row['p_category']; ?>");
        });
    </script>
</body>

</html>