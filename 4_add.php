<?php include('4_server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="4_form.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php $results = mysqli_query($con, "SELECT * FROM itemlist"); ?>

    <div class="container">
        <div class="col-12 clearfix mb-2">
            <a href="4_form.php" class="float-right btn-primary text-light px-2 py-2">Back</a>
        </div>

        <div class="col-12 form-group">
            <form action="4_server.php" method="post" class="d-flex py-4 px-2" style="background-color: #add0f7;">
                <input type="hidden" name="id">
                <div class="input-group mr-2">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="input-group mr-2">
                    <input type="text" name="code" class="form-control" placeholder="Code">
                </div>
                <div class="input-group mr-2">
                    <input type="text" name="category" class="form-control" placeholder="Category">
                </div>
                <div class="input-group mr-2">
                    <input type="number" name="price" class="form-control" placeholder="Price">
                </div>
                <div class="input-group mr-2">
                    <input type="number" name="count" class="form-control" placeholder="Count">
                </div>
                <div class="input-group">
                    <button type="submit" name="submit" class="btn btn-secondary form-control">Add</button>
                </div>
            </form>
        </div>

        <div class="col-12 list-group pl-3">
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock Count</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['count']; ?></td>
                        <td>
                            <a href="4_form.php?edit=<?php echo $row['id']; ?>" class="edit_btn btn-success btn-lg rounded">Edit</a>
                        </td>
                        <td>
                            <a href="4_server.php?del=<?php echo $row['id']; ?>" class="del_btn btn-danger btn-lg rounded">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>   
        </div> 

    </div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>