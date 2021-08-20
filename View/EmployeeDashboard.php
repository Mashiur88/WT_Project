<?php 
session_start();
if(empty($_SESSION["ID"]))
{
    header("Location: Employee_login.php");
}
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
<a href="../Control/Elogout.php">LogOut</a>
</body>
</html>