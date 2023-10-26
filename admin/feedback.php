<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
<script>
    function delFeedback(id) {
        if (confirm("You want to delete this Feedback ?")) {
            window.location.href = 'delete_feedback.php?id=' + id;
        }
    }
</script>
<table class="table table-striped table-hover">
    <h1>Feedback</h1>
    <hr>
    <tr>
        <th>Serial No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Comments</th>
        <th>Action</th>
    </tr>

	

    <?php 
	require('../connection.php');

    $i = 1;
    $sql = mysqli_query($con, "select * from feedback");
    while ($res = mysqli_fetch_assoc($sql)) {
        $id = $res['id'];
        $name = $res['name'];
        $email = $res['email'];
        $mobile = $res['mobile'];
        $message = $res['comments'];
    ?>
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['email']; ?></td>
            <td><?php echo $res['mobile']; ?></td>
            <td><?php echo $res['comments']; ?></td>
            <td>
                <a style="color: purple" href="view_feedback.php?id=<?php echo $id; ?>">View</a><br>
                <a style="color: green" href="edit_feedback.php?id=<?php echo $id; ?>">Edit</a><br>
                <a style="color: red" href="#" onclick="delFeedback('<?php echo $id; ?>')">Delete</a><br>
            </td>
        </tr>
    <?php 
    }
    ?>	
</table>
</body>
<html>
