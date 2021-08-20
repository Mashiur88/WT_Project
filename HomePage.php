<?php
$cookie_name = "customer";
$cookie_value = "visit";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
include('./Control/HomeAction.php');
if(isset($_SESSION['ID']))
{
session_start();
}
?>
<!doctype html>
<html>
<head>
<title>Project AIUB</title>
<script src="./Js/Edit.js"></script>
<link rel="stylesheet" type="text/css" href="./CSS/Page.css">
</head>
<body>
<div class="header sticky">
<table class="htab">
<tr>
<td align="right"><img src="Images/LOGO.jpg" alt="LOGO" width="100" height="70"></td>
<td align="left"><h2>PROJECT AIUB</h2></td>
<form method="post">
<td><input type="text" name="search" id="search" size="30"><button type="button" name="btn" onclick="MyAjaxFunc()">search</button></td>    
<td></td>
</form>
<td></td>
<td align="right">
<a href="./View/index.php">ADMIN</a>    <a href="./View/Employee_login.php">EMPLOYEE</a>
<a href="./View/Login.php">CUSTOMER</a>     <a href="./View/Vlogin.php">VENDOR</a>
</td>
</tr>
</table>
<table class="htab">
<tr>
<td><select id="category" name="category" value="Category">
    <option value="1">Electronic Device</option>
    <option value="2">Electronic Accessories</option>
    <option value="3">Home Appliances</option>
    <option value="4">Health and Beauty</option>
    <option value="5">Men's Fashion</option>
    <option value="6">Women's Fashion</option>
    <option value="7">Watches and Accessories</option>
    <option value="8">Automobiles & Motorbike</option>
</select>
</td>
<td align="right"><a href="./View/CustomerProfile.php"><button name="profile" id="profile"><span>Profile</span></button></a></td>
</tr>
</table>
</div>

<div class="inside">
<h3>Product List:</h3>
<table class="product" id="product">
    <tr>
<?php
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) 
    {
?>

<td><img src="<?php echo $row["P_image"];?>" width="150px"><br>
<?php echo $row["p_name"];?>
<?php echo "  ".$row["price"];?></td>
</tr>
<?php
    } 
}
else
 {
    echo "0 results";
 }
?>
</tr>
</table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>

