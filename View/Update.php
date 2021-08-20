<?php
session_start();
include('../Control/CustomerUpdate.php');
?>
<!DOCTYPE html>
<html>
<head>
<table style="width:40%">
<tr>
<td>
<h1>Update Your Account</h1>
</td>
</tr>
</table>
</head>
<body>
<table style="width:50%">
<form action="" id="sform" method="post">
 <tr>
 <td>Phone Number</td>
 <td>Full Name</td>
 </tr>
 <tr>
 <td><input type="text" name="pNumber" id="pNumber"></td>
 <td><input type="text"name="fName" id="fName"></td>
 </tr> 
 <tr>
 </tr>
 <!-- End of 1st row-->
 <tr>
 <td>Email</td>
 <td>Address</td>
 </tr><!-- End of 2nd row-->

 <tr>
 <td><input type="Email" name="email" id="email"></td>
 <td><input type="text" name='address' id="address"></td>
 </tr> <!-- End of 3rd row-->

 <tr>
 </tr>
 <tr>
 <td>Password<br>
 <input type="password" name="passWord" id="passWord"></td>
 <td><input type="submit" name="submit" value="Update"><br></td>
 </tr>  <!-- End of 4th row-->
 <tr>
 </tr>
 <tr>
 <td>
 Birthday
 </td>
 </tr> <!-- End of 5th row-->
 <tr>
 <td>
 <input type="date" name="bday">
 </td>
 </tr> <!-- End of 6th row-->
 <tr>
 </tr>
 <tr>
 <td>Gender</td>
 </tr>
 <tr>
 <td><input type="radio" id="gender" name="gender" value="Male">Male <input type="radio" id="gender" name="gender" value="Female">Female <input type="radio" id="gender" name="gender" value="Other">Other</td>
 </tr>
 <tr>
 </tr>
 </form>
 </table>
 <a href="CustomerProfile.php"><button name="back">Back</button></a>
 </body>
</html>