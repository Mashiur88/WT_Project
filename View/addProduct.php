<?php
session_start(); 

include ("../Control/addproductcheck.php");


if(empty($_SESSION["ID"])) 
{
header("Location: Vlogin.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Add New Product</h2>

<?php echo $error; ?>

<form action="" method="post"  enctype="multipart/form-data">
Product Name: 
<input type="text" name="pname"><br><br>
Product Description: 
<textarea name="pdesc"></textarea><br><br>
Product Status:
<select id="status" name="status" value="Status">
<option value="Active">Active</option>
<option value="InActive">InActive</option>
</select>
<br><br>
Product Price: 
<input type="number" name="pprice"><br><br>
Product category: 
<select id="category" name="category" value="Category">
<option value="1">Electronic Device</option>
<option value="2">Electronic Accessories</option>
<option value="3">Home Appliances</option>
<option value="4">Health and Beauty</option>
<option value="5">Men's Fashion</option>
<option value="6">Women's Fashion</option>
<option value="7">Watches and Accessories</option>
<option value="8">Automobiles & Motorbike</option>
</select><br><br>
Product Image: 
<input type="file" name="pimage"><br><br>
<br>
<br>
<input type="submit" name="add" value="ADD PRODUCT">
</form>
<h5> <a href="VendorDashboard.php">GO back</a></h5>
</body>
</html>