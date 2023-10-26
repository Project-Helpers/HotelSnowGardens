<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);

// Initialize the userId variable to an empty string
$userId = "";

// Check if the "id" parameter is set in the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
}

if (isset($register)) {
    if ($username == "" || $password == "" || $email == "") {
        $error = "<h3 style='color:red'>Please fill in all the details</h3>";
    } else {
        // Check if the username or email already exists
        $check_query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' OR email='$email'");
        if (mysqli_num_rows($check_query) > 0) {
            $error = "<h3 style='color:red'>Username or Email already exists</h3>";
        } else {
            // Insert the user data into the database without specifying the "id" column
            $insert_query = mysqli_query($con, "INSERT INTO users(username, password, email) VALUES('$username', '$password', '$email')");
            if ($insert_query) {
                // Redirect to the user details page if a user ID is available, otherwise redirect to another page
                if (!empty($userId)) {
                    header("Location: view_user.php?id=$userId"); // Redirect to the user details page after successful registration
                } else {
                    header("Location: dashboard.php?option=user_management"); // Redirect to a success page without a user ID
                }
                exit;
            } else {
                $error = "<h3 style='color:red'>Registration failed. Please try again later</h3>";
            }
        }
    }
}
?>



<?php
include('../header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
	
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
                        <div class="registration">
                            <div class="form-center">
                                <h1 class="pt-3">Add Users</h1>
                                <?php echo @$error; ?>
                                <?php echo @$success; ?>
                                <form action="#" method="post"><br>
                                    <div class="row mt-5">
                                        <div class="col">
                                            <div class="form-group registration-form">
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Username" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <div class="form-group registration-form">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <div class="form-group registration-form">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="Register" name="register"
                                        class="btn btn-primary booking-button text-center mt-5" required>
                                        
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
