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
    <title>Payment Details</title>
	<link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Payment Details</h1>
        <hr>
		<div class="mx-auto" style="width: 85%;">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Card Type</th>
                    <th>Card No</th>
                    <th>CVC</th>
                    <th>Expiration Date</th>
                    <th>Check In Date</th>
                    <th>Check Out Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 1;
                $sql = mysqli_query($con, "select * from room_Payment_details");
                while ($res = mysqli_fetch_assoc($sql)) {
                    $oid = $res['id'];
                    $mail = $res['email'];

                ?>
                <tr>
                    <td><?php echo $i;
                        $i++; ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['phone']; ?></td>
                    <td><?php echo $res['card_type']; ?></td>
                    <td><?php echo $res['card_no']; ?></td>
                    <td><?php echo $res['cvc']; ?></td>
                    <td><?php echo $res['expiration_date']; ?></td>
                    <td><?php echo $res['check_in_date']; ?></td>
                    <td><?php echo $res['check_out_date']; ?></td>

                    <td>
                        <a style="color:purple" href="view_Payment.php?Payment_id=<?php echo $oid; ?>">View</a><br>
                        <a style="color:green" href="edit_Payment.php?Payment_id=<?php echo $oid; ?>">Edit</a><br>
                        <a style="color:red" href="cancel_Payment.php?Payment_id=<?php echo $oid; ?>">Cancel</a>
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
