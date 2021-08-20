
<?php
      session_start();
	 include('../Control/userval.php');
	 
setcookie("Zakia", "project", time() + 3600, '/');
if (!isLoggedIn()) {

  header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminPanel.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
 
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>ID~<?php echo $_SESSION["loggedinuser"];?></header>
  <ul>
  <li><a href="adminPanel.php"><i class="fas fa-tachometer-alt"></i>DASHBOARD</a></li>
    <li><a href="orderlist.php"><i class="fas fa-qrcode"></i>Order List</a></li>
    <li><a href="approvelist.php"><i class="fas fa-link"></i>Confirm List</a></li>
    
    <li><a href="rejectlist.php"><i class="fas fa-stream"></i>Rejected List</a></li>
	<li><a href="cancelrequest.php"><i class="fas fa-stream"></i>Cancel Request</a></li>
    <li><a href="addemployee.php"><i class="fas fa-calendar-week"></i>Add Employee</a></li>
    <li><a href="employeeinfo.php"><i class="far fa-question-circle"></i>Employee Info</a></li>
    <li><a href="addvendor.php"><i class="fas fa-sliders-h"></i>Add Vendor</a></li>
	    <li><a href="vendorinfo.php"><i class="fas fa-sliders-h"></i>Vendor Info</a></li>
		<li><a href="editdelete.php"><i class="fas fa-sliders-h"></i>Edit/Delete Info</a></li>
    
    
	<li><a href="../Controller/logout.php"><i class="far fa-envelope"></i>Logout</a></li>
</ul>
</div>