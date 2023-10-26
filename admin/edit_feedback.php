<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);

if (isset($update)) {
    // Retrieve the feedback details from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comments'];

    // Update the feedback record in the database
    $update_query = mysqli_query($con, "UPDATE feedback SET name='$name', email='$email', mobile='$mobile', comments='$comments' WHERE id='$id'");
    if ($update_query) {
        $success = "<h3 style='color:green'>Feedback updated successfully</h3>";
        echo '<script>alert("Feedback updated successfully");</script>'; // Display a JavaScript alert
        header('location:dashboard.php?option=feedback'); // Redirect to the Feedback page after editing.
    } else {
        $error = "<h3 style='color:red'>Failed to update feedback</h3>";
    }
}

if (isset($_GET['id'])) {
    $feedbackId = $_GET['id'];
    $feedback_query = mysqli_query($con, "SELECT * FROM feedback WHERE id='$feedbackId'");
    $feedback_data = mysqli_fetch_assoc($feedback_query);
} else {
    // Redirect to the feedback details page if no feedback ID is provided
    header('location:dashboard.php?option=feedback');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Link to the CSS file  -->
    <title>Edit Feedback</title>
    
   
</head>

<body>
    <h1>Edit Feedback</h1>
    <?php echo @$error; ?>
    <?php echo @$success; ?>
    <div style="text-align: center;"> 
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?php echo $feedbackId; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $feedback_data['name']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $feedback_data['email']; ?>"><br><br>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="<?php echo $feedback_data['mobile']; ?>"><br><br>
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments"><?php echo $feedback_data['comments']; ?></textarea><br><br>
        <input type="submit" value="Update" name="update" class="blue-button" onclick="return confirm('Are you sure you want to update this feedback?');">

    </form>

    <br>
</div>
</body>

</html>
