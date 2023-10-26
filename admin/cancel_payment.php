<?php
include('../connection.php');
$oid = $_GET['Payment_id'];

if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    // User has confirmed the cancellation
    $q = mysqli_query($con, "delete from room_payment_details where id='$oid'");
    if ($q) {
        header('location:dashboard.php?option=payment_details');
    }
} else {
    // Display a confirmation alert
    echo '<script>
        if (confirm("Are you sure you want to cancel this payment?")) {
            window.location.href = "cancel_payment.php?Payment_id=' . $oid . '&confirm=yes";
        } else {
            window.location.href = "dashboard.php?option=payment_details";
        }
    </script>';
}
?>
