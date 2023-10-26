<?php
require('../connection.php');

if (isset($_GET['room_id'])) {
    $id = $_GET['room_id'];

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        // User has confirmed the deletion
        $sql = "DELETE FROM room_details WHERE room_id = $id";

        if (mysqli_query($con, $sql)) {
            header('Location: dashboard.php?option=rooms'); // Redirect to the Manage rooms page after deleting.
        } else {
            echo "Error deleting room.";
        }
    } else {
        // Display a confirmation alert
        echo '<script>
            if (confirm("Are you sure you want to delete this room?")) {
                window.location.href = "delete_room.php?room_id=' . $id . '&confirm=yes";

            } else {
                window.location.href = "dashboard.php?option=rooms";
            }
        </script>';
    }
}
?>
