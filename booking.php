<?php
include('header.php');
include('connection.php');

extract($_REQUEST);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from room_booking_details where email='$email' and room_type='$room_type' and address='$address' and check_in_date='$cdate' and check_out_date='$codate'");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {
   $sql="insert into room_booking_details(name, email, phone, address, room_type,check_in_date, check_out_date, confirmation) 
  values('$name','$email','$phone','$address', '$room_type','$cdate','$codate','No')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully booked this room</h1>"; 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Booking</title>
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

        <!-- start main -->
        <main>
            <!-- start banner 
             <section class="mt-5 remove-margin">
                <div class="bannerm">
                    <img class="img-fluid about-image" src="assets/img/slider/coxsbazar.jfif" alt="">
                    <div class="row banner-overlay">
                        <div class="col-12 banner-text">
                            <h2>Hotel Snow Gardens</h2>
                            <span>Cheap | Comfort | Safety | Security</span>
                        </div>
                    </div>
                </div>
            </section> -->

            <?php
            include('banner.php')
            ?>

           <!-- end banner -->
           <div class="col-md-12">
                        <h3 class="master-room borderrr text-center">Booking</h3></div>
        <hr>     

            <!-- start booking form -->
            <section class="container mt-5 forms">
                <form class="form-horizontal" method="post">
                    <div class="row">
                    <?php echo @$msg; ?>
                        <div class="col-sm-12 col-md-5 pe-5">
                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4> Name :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Email :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Mobile :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control" name="phone" placeholder="Type Phone Number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4> Address :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-7">
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Room Type:</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <select class="form-control" name="room_type" required>
                                            <option>Couple AC Room</option>
                                            <option>Twin Couple AC Room</option>
                                            <option>Couple Deluxe Non-AC Room</option>
                                            <option>Twin Couple Deluxe Non-AC Room</option>
                                            <option>Couple Economy Non-AC Room</option>
                                            <option>Twin Couple Economy Non-AC Room</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Check In Date :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="date" name="cdate" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Check Out Date :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="date" name="codate" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <input type="submit" value="Book Now" name="savedata" class="booking-button" required />
                        </div>
                    </div>
                </form>
            </section>
            <!-- end booking form -->
       
        <!-- end main -->
        <?php
        include('footer.php')
        ?>
    </div>
    </body>
</html>