<?php
require('../connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM room_details WHERE room_id = $id");
    $room = mysqli_fetch_assoc($sql);
} else {
    header('Location: room_management.php'); // Redirect to the Manage Rooms page if no ID is provided.
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Add this line to link to the css file -->
    <title>View Room</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="bg">
    <div class="container">
        <h1>View Room</h1>
        <hr>

        <div class="row">
            <div class="col-sm-12">
                <strong>Room Category:</strong> <?php echo $room['room_category']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong>Price:</strong> <?php echo $room['price']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong>Available Rooms:</strong> <?php echo $room['available_rooms']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong>Room Image:</strong><br><br>
                <a href="../assets/img/rooms/<?php echo $room['image']; ?>" target="_blank">
                    <img src="../assets/img/rooms/<?php echo $room['image']; ?>" alt="Room Image" width="300" height="200">
                </a>
            </div>
        </div>
    </div>
   
            <button class="back-button" onclick="window.location.href='dashboard.php?option=rooms'">Back to Room Details</button>
</body>
</html>
