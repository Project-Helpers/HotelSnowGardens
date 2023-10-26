<?php
include('header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Room</title>
</head>
<body class="bg">
    <div class="container">
        <!-- start #header -->
        <header id="header">
            <!-- start #menu -->
            <?php
            include('navbar.php')
            ?>
            <!-- end #menu -->
        </header>
        <!-- end #header -->


        <!-- start banner -->

        <?php
        include('banner.php')
        ?>

    
   
    <div class="col-md-12">
                        <h3 class="master-room borderrr text-center">View Available Rooms</h3></div>
        
        <hr>
        <div class="row">
            <?php
            require('connection.php');
            $sql = mysqli_query($con, "select * from room_details");
            while ($res = mysqli_fetch_assoc($sql)) {
                $roomCategory = $res['room_category'];
                $price = $res['price'];
                $availableRooms = $res['available_rooms'];
                $image = $res['image'];
            ?>
          <div class="col-md-4 mb-4">
    <div class="card" style="background: transparent; border: none;">
        <img src="assets/img/rooms/<?php echo $image; ?>" class="card-img-top" alt="Room Image" style="height: 200px;">
        <div class="card-body" style="background-color: rgba(128, 0, 128, 0.2); border-radius: 5px;">
            <h5 class="card-title text-white"><?php echo $roomCategory; ?></h5>
            <p class="card-text text-white">Price: Rs. <?php echo $price; ?></p>
            <p class="card-text text-white">Available Rooms: <?php echo $availableRooms; ?></p>
            <a href="booking.php"><button type="button" class="btn btn-primary btn-lg">Book Now</button></a>
            <span style="margin: 15px;"></span>
            <a href="payment.php"><button type="button" class="btn btn-primary btn-lg">Pay Now</button></a>
        </div>
    </div>
</div>

            


            <?php
            }
            ?>
        

        </div>
    <?php
        include('footer.php')
        ?>
    </div>
    </body>
</html>