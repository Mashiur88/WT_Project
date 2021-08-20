<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome page</title>
<h1>Hi!</h1>
<h3><?php echo $_SESSION["ID"];?></h3>
</head>
<body>
Welcome TO Project AIUB <br>
<script>alert('Success Fully Logged in');</script>
<a href="Welcome_Customer.php">See your Profile</a><br>
<a href="../Control/sessionout.php">LogOut</a>
</body>
</html>