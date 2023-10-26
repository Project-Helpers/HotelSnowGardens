<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Add this line to link to the css file -->
    <title>User Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>View User Details</h1>
        <hr>
        <?php
        include('../connection.php');
        
        // Check if the "id" parameter is set in the URL
        if (isset($_GET['id'])) {
            $userId = $_GET['id'];
            
            // Fetch user details from the database
            $sql = mysqli_query($con, "SELECT * FROM users WHERE id = $userId");
            $userDetails = mysqli_fetch_assoc($sql);
            
            if ($userDetails) {
        ?>
        <table class="table">
            <tr>
                <th>Id</th>
                <td><?php echo $userDetails['id']; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo $userDetails['username']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $userDetails['email']; ?></td>
            </tr>
            <tr>
                <th>Registration Date</th>
                <td><?php echo $userDetails['registration_date']; ?></td>
            </tr>
            
        </table>
        <?php
            } else {
                echo "User not found.";
            }
        } else {
            echo "User ID not provided.";
        }
        ?>
    </div>
     
    <button class="back-button" onclick="window.location.href='dashboard.php?option=user_management'">Back to User Details</button>
</body>
</html>
