<?php 
$i=1;
$sql=mysqli_query($con,"select * from users");
while($res=mysqli_fetch_assoc($sql))
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel.Com</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body>
<h1 style="background-color:#ed2553;border-radius:50px;text-align:center;font-family: 'Baloo Bhai', cursive;box-shadow:5px 5px 9px black;text-shadow:2px 2px #fff;">Admin Profile</h1><br>

<div class="container"style="width:100%;">
  <form action=".php">
    <div class="form-group">
      <label for="email">Name:</label>
       <input type="text" id="username" value="<?php echo $res['username']; ?>" class="form-control" name="name" readonly="readonly"/>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" id="email" value="<?php echo $res['email']; ?>" class="form-control" name="email" readonly="readonly"/>
    </div>
   
  </form>
</div>
<?php   
}
?>
</body>
</html>