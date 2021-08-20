<?php
include('../Control/Vaction.php');
if(isset($_SESSION['ID'])&&isset($_SESSION['Password'])){
    header("Location: ../View/VendorDashboard.php");
    }
?>
<!DOCTYPE html>
<html>
<title>
	ProjectAIUB Online
</title>
<head>
<table style="width:50%">
<tr>
<td>
<h2>Welcome to ProjectAiub!<br>Please login</h2>
<h5>New member? <a href="./Vendorform.php">Register here</a></h5>
</td>
</tr>
</table>
</head>
<body>

<form action="" method="post">
<label> Vendor ID </label><br>
<input type="text" name="ID" id="ID"> <br>
<label>Vendor Password </label><br>
<input type="password" name="Password" id="Password"><br>
<?php echo $error."<br><br>";?>
<input type="submit" name="submit" value="Login">
<input type="reset" value="Reset">
<h5><a href=""> </a>Forget Password?</h5>
</form>
<a href="../HomePage.php"><button name="Back">Back</button></a>
<br>
</body>
</html>