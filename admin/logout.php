<?php 
session_start();

if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    // User has confirmed the logout
    unset($_SESSION['admin_logged_in']);
    header('location:index.php'); // Redirect to the index page after logging out.
} else {
    // Display a confirmation alert
    echo '<script>
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "logout.php?confirm=yes";
        } else {
            window.location.href = "dashboard.php"; // Redirect to an appropriate page if the user cancels.
        }
    </script>';
}
?>
