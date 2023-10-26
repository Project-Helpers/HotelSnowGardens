<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rooms</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Manage Rooms</h1>
            
                
    <div class="col-md-19 text-right coner" style="margin-right: -30px;">
    <!-- Add Room button -->
    <a class="btn btn-primary" href="rooms.php">Add Room</a>
</div>
</div>


        </div>
        <hr>
        <div class="mx-auto" style="width: 80%;">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Serial No</th>
                    <th>Room Category</th>
                    <th>Price</th>
                    <th>Available Rooms</th>
                    <th>Room Image</th>
                    <th>Action</th>
                </tr>

                <?php
                require('../connection.php');
                $i = 1;
                $sql = mysqli_query($con, "select * from room_details");
                while ($res = mysqli_fetch_assoc($sql)) {
                    $id = $res['room_id'];
                    $roomCategory = $res['room_category'];
                    $price = $res['price'];
                    $availableRooms = $res['available_rooms'];
                    $image = $res['image'];
                ?>
                <tr>
                    <td><?php echo $i; $i++; ?></td>
                    <td><?php echo $roomCategory; ?></td>
                    <td><?php echo $price; ?></td>
                    <td><?php echo $availableRooms; ?></td>
                    <td><?php echo $image; ?></td>
                    <td>
                        <a style="color: purple" href="view_room.php?id=<?php echo $id; ?>">View</a><br>
                        <a style="color: green" href="edit_room.php?id=<?php echo $id; ?>">Edit</a><br>
                        <a style="color: red" href="delete_room.php?room_id=<?php echo $id; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
