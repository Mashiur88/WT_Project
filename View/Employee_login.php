<?php
include('../Control/Eaction.php');
if(isset($_SESSION['ID'])&&isset($_SESSION['Password'])){
    header("Location: ../View/EmployeeDashboard.php");
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
<h5>New member? <a href="./Employeeform.php">Register here</a></h5>
</td>
</tr>
</table>
</head>
<body>
<form action=""method="post">
<label>Employee Id </label><br>
<input type="text" name="ID" id="ID"><br>
<label> Employee Password </label><br>
<input type="password" name="Password" id="Password"><br>
<?php echo $error;?><br><br>
<input type="submit" name="submit" value="Login">
<input type="reset" name="reset" value="Reset">
<h5><a href=""> </a>Forget Password?</h5>
<a href="../HomePage.php">Back</a>
</form>
</body>
</html>