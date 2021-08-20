<?php 
session_start();
if(empty($_SESSION['pNumber'])&&empty($_SESSION['fName'])&&empty($_SESSION['email'])&&empty($_SESSION['passWord'])&&empty($_SESSION['bday'])&&empty($_SESSION['gender'])){
    header("Location: ../View/CustomerSignup.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome page</title>
<h1>Hi!</h1>
<h3><?php echo $_SESSION["fName"];?></h3>
</head>
<body>
<h4> your Profile data</h4>
<?php echo "your name: " . $_SESSION["fName"] . "<br>";?>
<?php echo "Mobile number: " .$_SESSION["pNumber"] . "<br>";?>
<?php echo "Email: " .$_SESSION["email"] . "<br>";?>
<?php echo "Password: " .$_SESSION["passWord"] . "<br>";?>
<?php echo "Gender: " .$_SESSION["gender"] . "<br>";?>
<?php echo "Birth Date: ". $_SESSION["bday"] . "<br>";?>
<?php echo "Address: ". $_SESSION["address"] . "<br>";?>

All informations are correct.<a href="../Control/Back.php">Done</a>

</body>
</html>