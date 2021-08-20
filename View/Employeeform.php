<?php
include('../Control/Employeeaction.php');
if(isset($_SESSION['username'])&&isset($_SESSION['Userid'])&&isset($_SESSION['email'])&&isset($_SESSION['passWord'])){
    header("Location: ../View/welcomeemployee.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Profile</title>
	<h1>Employee Profile</h1>
	
</head>
<body>
    
Already member? <a href="./Employee_login.php">login </a>here
    	<table height="300px">
               
			<form action="" method="POST" >
				<tr>
					<td>Name:</td>
					<td><input type="text" name="username" id="username"> </td>
					<td><?php echo $validName;?></td>
				</tr>

				<tr>
					<td>Id:</td>
					<td><input type="text" name="Userid" id="Userid" > </td>
					<td><?php echo $validUser;?></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="password" name="passWord" id="passWord" > </td>
					<td><?php echo $validpassWord;?></td>
				</tr>


                <tr>
					<td>Gender: </td>
					<td>  
						<input type="radio" name="gender" id="gender" value="Male">Male
						<input type="radio" name="gender" id="gender" value="Female"> Female
						<input type="radio" name="gender" id="gender" value="Other"> Other 
					</td>
					

				
				<tr><td><?php echo $validRadioButton;?></td></tr>
                <tr>
					<td>Date of Birth: </td>
					<td> <input type="date" name="dob"> </td>

				</tr>
				
				<tr><td><?php echo $validDate;?></td></tr>

				<tr>
					<td>Email: </td>
					<td> <input type="email" name="email" id="email"> </td>
					<td><?php echo $validEmail;?></td>

				</tr>

				<tr>
					 <td>

				</td>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
				</form>
			</table>		
	
	
</body>
</html>