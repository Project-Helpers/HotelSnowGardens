<?php
session_start();
extract($_REQUEST);
include('../connection.php');
$admin = $_SESSION['admin_logged_in'];
if ($admin == "") {
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hotel Snow Gardens Admin Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="../assets/css/admin.css" rel="stylesheet">
  <link href="../assets/css/sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/dashboard.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       
      </div>
      <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
          
      <li><a class="welcome blink" href="#" style="color: white">Welcome <?php echo $admin; ?></a></li>


       

        </ul>
      
        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="logout.php" style="color: white">Logout</a></li>
       

        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
    <div class="col-sm-3 col-md-2 sidebar" id="fixed-sidebar">
    

     

      <div class="container" id="fixed-sidebar">
    <div class="row" id="fixed-sidebar">
        <div class="sidebar col-sm-3 col-md-5" id="fixed-sidebar">
            <ul class="custom-list"><br><br>
                <li><a href="dashboard.php?option=feedback" id="list-color">Feedback</a></li><br><br>
                

                <li><a href="dashboard.php?option=booking_details" id="list-color">Booking Details</a></li><br><br>
                <li><a href="dashboard.php?option=payment_details" id="list-color">Payment Details</a></li><br><br>
                <li><a href="dashboard.php?option=user_management" id="list-color">Users</a></li><br><br>
                <li><a href="dashboard.php?option=rooms" id="list-color">Rooms</a></li><br><br>
            </ul>
        </div>
        
       
    </div>
</div>

      </div>
      
      <div class="col-sm-9 col-sm-offset-5 col-md-7 col-md-offset-3 main" >
        <?php
        @$opt = $_GET['option'];
        if ($opt == "") {
          include('reports.php');
        } else {
          if ($opt == "feedback") {
            include('feedback.php');
         
          
          }else if ($opt == "booking_details") {
            include('booking_details.php');
          } else if ($opt == "admin_profile") {
            include('admin_profile.php');
          } else if ($opt == "payment_details") {
            include('payment_details.php');
          }
          else if ($opt == "user_management") {
             include('user_management.php');
          }
          else if ($opt == "rooms") {
            include('room_management.php');
         }
        
          
        }
        ?>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>