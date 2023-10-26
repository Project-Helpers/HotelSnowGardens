<?php
// session_start();
error_reporting(1);
require('../connection.php'); // Include database connection script
extract($_REQUEST);

// Check if the database connection is established successfully
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Booking Details</h1>
        <hr>
        <div class="mx-auto" style="width: 80%;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Room Type</th>
                        <th>Check In Date</th>
                        <th>Check Out Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $sql = mysqli_query($con, "select * from room_booking_details");
                    while ($res = mysqli_fetch_assoc($sql)) {
                        $bookingId = $res['id'];
                    ?>
                    <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['phone']; ?></td>
                        <td><?php echo $res['address']; ?></td>
                        <td><?php echo $res['room_type']; ?></td>
                        <td><?php echo $res['check_in_date']; ?></td>
                        <td><?php echo $res['check_out_date']; ?></td>
                        <td>
                            <a style="color:purple" href="view_booking.php?booking_id=<?php echo $bookingId; ?>">View</a><br>
                            <a style="color:green" href="edit_booking.php?booking_id=<?php echo $bookingId; ?>">Edit</a><br>
                            <a style="color:red" href="cancel_booking.php?booking_id=<?php echo $bookingId; ?>">Cancel</a><br>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
