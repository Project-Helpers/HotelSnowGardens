<?php
include('../connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    $userId = $_GET['id']; // Retrieve user ID from the URL
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];

    // Update user details in the database
    $updateQuery = "UPDATE users SET username='$newUsername', email='$newEmail', password='$newPassword' WHERE id=$userId";
    $result = mysqli_query($con, $updateQuery);

    if ($result) {
        header("Location: view_user.php"); // Redirect to the user management page after successful update
        
    } else {
        echo "Error updating user.";
    }
} else {
    echo "User ID not provided or invalid request.";
}
?>
