<?php
include('../connection.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        // User has confirmed the deletion
        $deleteQuery = "DELETE FROM users WHERE id = $userId";
        $result = mysqli_query($con, $deleteQuery);

        if ($result) {
            header("Location: dashboard.php?option=user_management"); // Redirect to user_management.php with the same user ID
        } else {
            echo "Error deleting user.";
        }
    } else {
        // Display a confirmation alert
        echo '<script>
            if (confirm("Are you sure you want to delete this user?")) {
                window.location.href = "delete_user.php?id=' . $userId . '&confirm=yes";
            } else {
                window.location.href = "dashboard.php?option=user_management";
            }
        </script>';
    }
} else {
    echo "User ID not provided.";
}
?>
