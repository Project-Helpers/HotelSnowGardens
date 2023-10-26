<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);

if (isset($_GET['Payment_id'])) {
    $PaymentId = $_GET['Payment_id'];
    $Payment_query = mysqli_query($con, "SELECT * FROM room_Payment_details WHERE id='$PaymentId'");
    $Payment_data = mysqli_fetch_assoc($Payment_query);
} else {
    // Redirect to the Payment details page if no Payment ID is provided
    header("Location: dashboard.php?option=payment_details");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Add this line to link to the css file -->
    <title>View Payment</title>
</head>
<body>
    <h1>View Payment Details</h1>
    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo $Payment_data['name']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $Payment_data['email']; ?></td>
        </tr>
        <tr>
            <td>Mobile Number:</td>
            <td><?php echo $Payment_data['phone']; ?></td>
        </tr>
        <tr>
            <td>Card Type:</td>
            <td><?php echo $Payment_data['card_type']; ?></td>
        </tr>
        <tr>
            <td>Card No:</td>
            <td><?php echo $Payment_data['card_no']; ?></td>
        </tr>
        <tr>
            <td>cvc:</td>
            <td><?php echo $Payment_data['cvc']; ?></td>
        </tr>
        <tr>
            <td>Expiration Date:</td>
            <td><?php echo $Payment_data['expiration_date']; ?></td>
        </tr>
        <tr>
            <td>Check In Date:</td>
            <td><?php echo $Payment_data['check_in_date']; ?></td>
        </tr>
        <tr>
            <td>Check Out Date:</td>
            <td><?php echo $Payment_data['check_out_date']; ?></td>
        </tr>
    </table>
    <br>
    
    <button class="back-button" onclick="window.location.href='dashboard.php?option=payment_details'">Back to Payment List</button>
</body>
</html>
