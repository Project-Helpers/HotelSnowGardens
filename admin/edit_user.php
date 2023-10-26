<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Link to the CSS file  -->
    <title>Edit User</title>
   
</head>
<body>
    <div class="container">
        <h1>Edit User</h1>
        
        <?php
        include('../connection.php');

        // Initialize userId variable
        $userId = null;

        // Check if the "id" parameter is set in the URL
        if (isset($_GET['id'])) {
            $userId = $_GET['id'];
        }

        // Check if it's a POST request and the user ID is valid
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $userId !== null) {
            // Retrieve user details from the database
            $sql = mysqli_query($con, "SELECT * FROM users WHERE id = $userId");
            $userDetails = mysqli_fetch_assoc($sql);

            if ($userDetails) {
                // Handle the form submission and update user details
                $newUsername = $_POST['username'];
                $newEmail = $_POST['email'];
                $newPassword = $_POST['password'];

                // Update user details in the database
                $updateQuery = "UPDATE users SET username='$newUsername', email='$newEmail', password='$newPassword' WHERE id=$userId";
                $result = mysqli_query($con, $updateQuery);

                if ($result) {
                    //header("Location: view_user.php?id=$userId"); // Redirect to the user details page after successful update
                    $success = "<h3 style='color:green'>User updated successfully</h3>";
                    echo '<script>alert("User updated successfully");</script>'; // Display a JavaScript alert
                    header("Location: dashboard.php?option=user_management"); // Redirect to the User Management page after editing.
                    exit;
                } else {
                    echo "Error updating user.";
                }
            } else {
                echo "User not found.";
            }
        } 

        if ($userId !== null) {
            // Fetch user details from the database (outside of the POST request block)
            $sql = mysqli_query($con, "SELECT * FROM users WHERE id = $userId");
            $userDetails = mysqli_fetch_assoc($sql);

            if ($userDetails) {
        ?>
        <div style="text-align: center;"> 
       <form method="POST" action="edit_user.php?id=<?php echo $userId; ?>">
            <input type="hidden" name="id" value="<?php echo $userDetails['id']; ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $userDetails['username']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $userDetails['email']; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $userDetails['password']; ?>">
            </div>
            
            <input type="submit" value="Update" name="update user" class="blue-button" onclick="return confirm('Are you sure you want to update this user details?');">

        </form>
        <?php
            }
        }
        ?>
    </div>
    </div>
</body>
</html>
