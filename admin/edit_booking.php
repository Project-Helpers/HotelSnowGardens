<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);

if (isset($update)) {
    // Retrieve the booking details from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $room_type = $_POST['room_type'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    // Update the booking record in the database
    $update_query = mysqli_query($con, "UPDATE room_booking_details SET name='$name', email='$email', phone='$mobile', address='$address', room_type='$room_type', check_in_date='$check_in_date', check_out_date='$check_out_date' WHERE id='$id'");
    if ($update_query) {
        $success = "<h3 style='color:green'>Booking updated successfully</h3>";
        echo '<script>alert("Booking updated successfully");</script>'; // Display a JavaScript alert
        header('Location: dashboard.php?option=booking_details'); // Redirect to the Booking Details page after editing.
    } else {
        $error = "<h3 style='color:red'>Failed to update booking</h3>";
    }
}

if (isset($_GET['booking_id'])) {
    $bookingId = $_GET['booking_id'];
    $booking_query = mysqli_query($con, "SELECT * FROM room_booking_details WHERE id='$bookingId'");
    $booking_data = mysqli_fetch_assoc($booking_query);
} else {
    // Redirect to the booking details page if no booking ID is provided
    header("Location: dashboard.php?option=booking_details");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Link to the CSS file -->
    <title>Edit Booking</title>

    
</head>

<body>
    <h1>Edit Booking</h1>
    <?php echo @$error; ?>
    <?php echo @$success; ?>
    <div style="text-align: center;"> 
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?php echo $bookingId; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $booking_data['name']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $booking_data['email']; ?>"><br><br>
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" value="<?php echo $booking_data['phone']; ?>"><br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address"><?php echo $booking_data['address']; ?></textarea><br><br>
        <label for="room_type">Room Type:</label>
        <input type="text" id="room_type" name="room_type" value="<?php echo $booking_data['room_type']; ?>"><br><br>
        <label for="check_in_date">Check In Date:</label>
        <input type="text" id="check_in_date" name="check_in_date" value="<?php echo $booking_data['check_in_date']; ?>"><br><br>
        <label for="check_out_date">Check Out Date:</label>
        <input type="text" id="check_out_date" name="check_out_date" value="<?php echo $booking_data['check_out_date']; ?>"><br><br>
        
        <input type="submit" value="Update" name="update" class="blue-button" onclick="return confirm('Are you sure you want to update this booking details?');">
    </form>
</div>
</body>

</html>
