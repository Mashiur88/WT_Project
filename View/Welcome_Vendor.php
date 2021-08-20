<?php
session_start();
if(empty($_SESSION['vname'])&&empty($_SESSION['email'])&&empty($_SESSION['uname'])&&empty($_SESSION['passWord'])&&empty($_SESSION['catagory'])&&empty($_SESSION['vaddress'])&&empty($_SESSION['vaccountnum']))
{

    header("Location: ../View/Vendorform.php");

}
?>
<!DOCTYPE html>
<html>
<head>
<title>
WELCOME TO THE VENDOR PAGE
</title>
</head>
<body>
<h1>Hi </h1>
<?php echo "Your name:" . $_SESSION["vname"] . "<br>";?>
<?php echo "Your email:" . $_SESSION["email"] . "<br>";?>
<?php echo "Your User name:" . $_SESSION["uname"] . "<br>";?>
<?php echo "Your Password:" . $_SESSION["passWord"] . "<br>";?>
<?php echo "Your catagory:" . $_SESSION["catagory"] . "<br>";?>
<?php echo "Your Address:" . $_SESSION["vaddress"] . "<br>";?>
<?php echo "Your Account Number:" . $_SESSION["vaccountnum"] . "<br>";?>
All information are correct:<a href="../Control/Return.php">Back to Form</a>
</body>
</html>