<?php
include('../connection.php');
extract($_REQUEST);

$available = isset($available) ? $available : '';
$available_rooms = isset($available_rooms) ? $available_rooms : '';

if(isset($savedata)) {
    // Handle the uploaded image
    $targetDir = "../assets/img/rooms/"; // The directory where images will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]); // Full path to the uploaded image
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check === false) {
        $msg = "<h1 style='color:red'>File is not an image.</h1>";
    } else {
        // Move the uploaded image to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Image upload was successful, insert data into the database
            $sql = "INSERT INTO room_details (room_category, price, available_rooms, image) VALUES ('$room_category', '$price', '$available', '".$_FILES["image"]["name"]."')";

            if (mysqli_query($con, $sql)) {
               
                
                $msg = "<h1 style='color:blue'>You have successfully added this room.</h3>";
                echo '<script>alert("Feedback updated successfully");</script>'; // Display a JavaScript alert
                header('Location: dashboard.php?option=rooms'); // Redirect to the Manage Rooms page after editing.
                }
            else {
                $msg = "<h1 style='color:red'>Error adding room: " . mysqli_error($con) . "</h1>";
            }
        } else {
            $msg = "<h1 style='color:red'>Failed to upload the image.</h1>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="../assets/css/style1.css"> <!-- Link to the CSS file -->
	<title>Add Rooms</title>
	
</head>

<body class="bg">
    <div class="container">
        <h1>Add Rooms</h1>
        
        <!-- start main -->
        <main>
            <!-- start adding form -->
            <section class="container mt-5 forms">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 pe-5">
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Room Category :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <select class="form-control" name="room_category" required>
                                            <option>Couple AC Room</option>
                                            <option>Twin Couple AC Room</option>
                                            <option>Couple Deluxe Non-AC Room</option>
                                            <option>Twin Couple Deluxe Non-AC Room</option>
                                            <option>Couple Economy Non-AC Room</option>
                                            <option>Twin Couple Economy Non-AC Room</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Price :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" name="price" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Available Rooms :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" name="available" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Room Image :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 d-flex justify-content-center">
                           
                            <input type="submit" value="Add Now" name="savedata" class="back-button" onclick="return confirm('Are you sure you want to add this room?');">
                        </div>
                    </div>
                </form>
            </section>
            <!-- end adding form -->
        </main>
        <!-- end main -->
    </div>

    
</body>
</html>