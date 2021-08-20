<?php
$cookie_name = "Vendor";
$cookie_value = "Shop";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
include('../Control/process.php');
if(isset($_SESSION['vname'])&&isset($_SESSION['email'])&&isset($_SESSION['uname'])&&isset($_SESSION['passWord'])&&isset($_SESSION['catagory'])&&isset($_SESSION['vaddress'])&&isset($_SESSION['vaccountnum']))
{

    header("Location: ./Welcome_Vendor.php");

}
?>
<html>
<head>
<title>Vendor form</title>
</head>
<body>
<table style="width:70%">
<form action="" id="vform" method="POST">
<tr>
<td><label for="vname"> Vendor ID:</label></td>
<td><input type="text" id="vname" name="vname">
<?php echo $validFullName;?></td>
</tr>
<tr>
<td><label for="email">E-mail:</label></td>
<td><input type="text" id="email" name="email">
<?php echo " ". $validEmail;?></td>
</tr>
<tr>
<td><label for="uname">User Name:</label></td>
<td><input type="text" id="uname" name="uname" >
<?php echo $validUserName;?>
</td>

</tr>
<tr>
<td><label for="passWord">Password:</label></td>
<td><input type="text" id="passWord" name="passWord">
<?php echo  $validPassWord;?>
</td>
<tr>
<td><label for="vaddress">Address:</label></td>
<td><input type="text" id="vaddress" name="vaddress" >
<?php echo $validvaddress;?>
</td>

</tr>
<tr>
<td><label for="vaccountnum">Account number</label></td>
<td><input type="text" id="vaccountnum" name="vaccountnum" >
<?php echo $validvaccountnum;?>
</td>

</tr>

</tr>
<tr>
<td><label for="Catagory">Catagory</label></td>
<td>
<input type= radio id="catagory" name="catagory" value="Electronics Device">Electronics Device
<input type= radio id="catagory" name="catagory" value="Health and Bauty">Health and Bauty
<input type= radio id="catagory" name="catagory" value="Womens Fashion">Womens Fashion
<input type= radio id="catagory" name="catagory" value="Mens Fashion">Mens Fashion
<input type= radio id="catagory" name="catagory" value="Sports and Outdoor">Sports and Outdoor</td>
<td><?php echo $validCatagory;?></td>
<td><?php echo  $catagory;?></td>
</td>
</tr>
<tr><td colspan="2">
In general, a good Terms and Conditions for an ecommerce store should contain the following clauses:</td></tr>
<tr><td colspan="2">Limitations of liability. Intellectual property/trademark protection. Pricing and payment terms, including shipping, returns, exchanges and cancellations.</td></tr>
<tr><td colspan="2">Product information. Dispute resolution.</td></tr>
<tr>
<td align="right">
<input type="checkbox" id="checkbox" name="checkbox" value="1"></td>
<td>I agree to the terms and conditions</td>
<td><?php echo $validCheckbox;?></td>
</tr>
<tr>
<td>
</td>
<td>
<input type=submit id="login" name="submit">
<input type=reset id="reset" name="reset">
</td>
</tr>
</form>
</table>
Already member? <a href="./Vlogin.php">login </a>here
</body>
</html>