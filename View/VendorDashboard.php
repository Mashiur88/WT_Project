<?php 
session_start();
if(empty($_SESSION["ID"]))
{
    header("Location: Vlogin.php");
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
<a href="../View/addProduct.php">Add Product</a><br>
<a href="../View/updateProduct.php">Update Product</a><br>
<a href="../View/deleteProduct.php">Delete Product</a><br>
<a href="../Control/vlogout.php">Logout</a>
</body>
</html>