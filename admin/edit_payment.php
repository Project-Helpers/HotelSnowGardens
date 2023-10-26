<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);

if (isset($update)) {
    // Retrieve the Payment details from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    $card_type = $_POST['card_type'];
    $card_no = $_POST['card_no'];
    $cvc = $_POST['cvc'];
    $expiration_date = $_POST['expiration_date'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    // Update the Payment record in the database
    $update_query = mysqli_query($con, "UPDATE room_payment_details SET name='$name', email='$email', phone='$mobile', card_type='$card_type', card_no='$card_no', cvc='$cvc', expiration_date='$expiration_date', check_in_date='$check_in_date', check_out_date='$check_out_date' WHERE id='$id'");
    if ($update_query) {
        $success = "<h3 style='color:green'>Payment updated successfully</h3>";
        echo '<script>alert("Payment updated successfully");</script>'; // Display a JavaScript alert
        header('Location: dashboard.php?option=payment_details'); // Redirect to the Payment Details page after editing.
    } else {
        $error = "<h3 style='color:red'>Failed to update Payment</h3>";
    }
}

if (isset($_GET['Payment_id'])) {
    $PaymentId = $_GET['Payment_id'];
    $Payment_query = mysqli_query($con, "SELECT * FROM room_payment_details WHERE id='$PaymentId'");
    $Payment_data = mysqli_fetch_assoc($Payment_query);
} else {
    // Redirect to the Payment Details page if no Payment ID is provided
    header("Location: dashboard.php?option=payment_details");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Link to the CSS file -->
    <title>Edit Payment</title>

    
</head>

<body>
    <h1>Edit Payment</h1>
    <?php echo @$error; ?>
    <?php echo @$success; ?>
    <div style="text-align: center;"> 
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?php echo $PaymentId; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $Payment_data['name']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $Payment_data['email']; ?>"><br><br>
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" value="<?php echo $Payment_data['phone']; ?>"><br><br>
        
        <label for="card_type">Card Type:</label>
        <input type="text" id="card_type" name="card_type" value="<?php echo $Payment_data['card_type']; ?>"><br><br>
        <label for="card_no">Card No:</label>
        <input type="text" id="card_no" name="card_no" value="<?php echo $Payment_data['card_no']; ?>"><br><br>
        <label for="cvc">CVC:</label>
        <input type="text" id="cvc" name="cvc" value="<?php echo $Payment_data['cvc']; ?>"><br><br>
        <label for="expiration_date">Expiration Date:</label>
        <input type="text" id="expiration_date" name="expiration_date" value="<?php echo $Payment_data['expiration_date']; ?>"><br><br>
        <label for="check_in_date">Check In Date:</label>
        <input type="text" id="check_in_date" name="check_in_date" value="<?php echo $Payment_data['check_in_date']; ?>"><br><br>
        <label for="check_out_date">Check Out Date:</label>
        <input type="text" id="check_out_date" name="check_out_date" value="<?php echo $Payment_data['check_out_date']; ?>"><br><br>
        <input type="submit" value="Update" name="update" class="blue-button" onclick="return confirm('Are you sure you want to update this feedback?');">

    </form>
    </div>
</body>

</html>
