<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);

if (isset($_GET['booking_id'])) {
    $bookingId = $_GET['booking_id'];
    $booking_query = mysqli_query($con, "SELECT * FROM room_booking_details WHERE id='$bookingId'");
    $booking_data = mysqli_fetch_assoc($booking_query);
} else {
    // Redirect to the booking listing page if no booking ID is provided
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
    <title>View Booking</title>
</head>
<body>
    <h1>View Booking Details</h1>
    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo $booking_data['name']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $booking_data['email']; ?></td>
        </tr>
        <tr>
            <td>Mobile Number:</td>
            <td><?php echo $booking_data['phone']; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $booking_data['address']; ?></td>
        </tr>
        <tr>
            <td>Room Type:</td>
            <td><?php echo $booking_data['room_type']; ?></td>
        </tr>
        <tr>
            <td>Check In Date:</td>
            <td><?php echo $booking_data['check_in_date']; ?></td>
        </tr>
        <tr>
            <td>Check Out Date:</td>
            <td><?php echo $booking_data['check_out_date']; ?></td>
        </tr>
    </table>
    <br>
    <button class="back-button" onclick="window.location.href='dashboard.php?option=booking_details'">Back to Booking List</button>
</body>
</html>
