<?php
session_start();
if(empty($_SESSION['username'])&&empty($_SESSION['Userid'])&&empty($_SESSION['email'])&&empty($_SESSION['passWord'])){
    header("Location: ../View/Employeeform.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title> WELCOME </title>
<h1> Hi! </h1>
<h3><?php echo $_SESSION["username"];?></h3>
</head>
<body>
<h4> your profile data </h4>
<?php echo "your name :" . $_SESSION["username"] . "<br>";?>
<?php echo "Your Id  :" . $_SESSION["Userid"] . "<br>";?>
<?php echo "your password :" . $_SESSION["passWord"] . "<br>";?>
<?php echo "Gender :" . $_SESSION["gender"] . "<br>";?>
<?php echo "Date Of Birth :" . $_SESSION["dob"] . "<br>";?>
<?php echo "Email :" . $_SESSION["email"] . "<br>";?>

All Information Are Right <a href = "../Control/mlogout.php">Done </a>


</body>
</html>


