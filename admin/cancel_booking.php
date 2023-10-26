<?php
include('../connection.php');
$oid = $_GET['booking_id'];

if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    // User has confirmed the deletion
    $q = mysqli_query($con, "delete from room_booking_details where id='$oid'");
    if ($q) {
        header('location:dashboard.php?option=booking_details');
    }
} else {
    // Display a confirmation alert
    echo '<script>
        if (confirm("Are you sure you want to cancel this booking?")) {
            window.location.href = "cancel_booking.php?booking_id=' . $oid . '&confirm=yes";
        } else {
            window.location.href = "dashboard.php?option=booking_details";
        }
    </script>';
}
?>
