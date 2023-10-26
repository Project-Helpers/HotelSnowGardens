<?php 
include('../header.php')
?>

<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);

if (isset($login)) {
    if ($eid == "" || $pass == "") {
        $error = "<h3 style='color:red'>Fill in all details</h3>";
    } else {
        // Check if the username and password match in the 'users' table
        $sql = mysqli_query($con, "SELECT * FROM users WHERE username='$eid' AND password='$pass'");
        if (mysqli_num_rows($sql) > 0) {
            $_SESSION['admin_logged_in'] = $eid;
            header('location: dashboard.php');
        } else {
            $error = "<h3 style='color:red'>Invalid login details</h3>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>



</head>
<body class="bg">
    <div class="container w-100">
        <!-- start #header -->
        <header id="header">
            <!-- start #menu -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex align-items-center justify-content-center">
                    <a class="navbar-brand" href="../index.php">Hotel Snow Gardens</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <!-- end #menu -->
        </header>
        <!-- end #header -->

        <!-- start #main -->
        <main>
            <section class="d-flex justify-content-center">
                <div class="row">
                    <div class="col">
                        <div class="login">
                            <div class="form-center">
                            <h1 class="pt-3">Admin Login</h1>
                            <i class="fa fa-user-secret fa-7x mt-5" aria-hidden="true"></i>
                            <?php echo @$error;?>
                            <form action="#" method="post"><br>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="form-group login-form">
                                            <input type="text" class="form-control" name="eid" placeholder="Username"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="form-group login-form">
                                            <input type="Password" class="form-control" name="pass"
                                                placeholder="Password" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <a href="dashboard.php"><input type="submit" value="Login" name="login"
                                        class="btn btn-primary booking-button text-center mt-5" required></a>
                            </form><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- end #main -->
    </div>
</body>
</html>