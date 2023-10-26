<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
               
        <div class="row">
            <div class="col-md-9">
                <h1>User Details</h1>
            
                
    <div class="col-md-19 text-right coner" style="margin-right: -10px;">
    <!-- Add Room button -->
    <a class="btn btn-primary" href="register.php">Add User</a>
</div>
</div>
</div>
        <hr>
        <div class="mx-auto" style="width: 80%;">
       <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('../connection.php');
                    $i = 1;
                    $sql = mysqli_query($con, "SELECT * FROM users");
                    while ($res = mysqli_fetch_assoc($sql)) {
                        $userId = $res['id'];
                    ?>
                    <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $res['username']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['registration_date']; ?></td>
                        <td>
                            <a style="color: purple" href="view_user.php?id=<?php echo $userId; ?>">View</a><br>
                            <a style="color: green" href="edit_user.php?id=<?php echo $userId; ?>">Edit</a><br>
                            <a style="color: red" href="delete_user.php?id=<?php echo $userId; ?>">Delete</a><br>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
     
    </div>
</body>
</html>
