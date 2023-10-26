<?php
session_start();
error_reporting(1);
require('../connection.php');

extract($_REQUEST);

if (isset($_GET['id'])) {
    $feedbackId = $_GET['id'];
    $feedback_query = mysqli_query($con, "SELECT * FROM feedback WHERE id='$feedbackId'");
    $feedback_data = mysqli_fetch_assoc($feedback_query);
    
} else {
    // Redirect to the feedback listing page if no feedback ID is provided
    header('location:dashboard.php?option=feedback');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Add this line to link to the css file -->
</head>

<body>
    <div class="center-content">
        <h1>View Feedback</h1>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $feedback_data['name']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $feedback_data['email']; ?></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><?php echo $feedback_data['mobile']; ?></td>
            </tr>
            <tr>
                <td>Comments</td>
                <td><?php echo $feedback_data['comments']; ?></td>
            </tr>
        </table>
        <br>
        <button class="back-button" onclick="window.location.href='dashboard.php?option=feedback'">Back to Feedback List</button>
    </div>
</body>
</html>
