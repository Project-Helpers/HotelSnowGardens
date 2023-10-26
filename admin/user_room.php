<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Available Rooms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="bg">
    <div class="container">
        <h1>View Available Rooms</h1>
        <hr>
        <!-- Display Room Data in a Table -->
        <table class="table table-striped table-hover">
            <tr>
                <th>Serial No</th>
                <th>Room Category</th>
                <th>Price</th>
                <th>Available Rooms</th>
                <th>Room Image</th>
               
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
                    <td>
                        <!-- Add a link to the image file without displaying the image -->
                        <a href="../assets/img/rooms/<?php echo $image; ?>" target="_blank">View Image</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <script>
            function delRoom(id) {
                if (confirm("You want to delete this Room?")) {
                    window.location.href = 'delete_room.php?id=' + id;
                }
            }
        </script>
    </div>
</body>
</html>
