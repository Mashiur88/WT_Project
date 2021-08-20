<?php
include('../Control/Myaction.php');

if(isset($_SESSION['pNumber'])&&isset($_SESSION['fName'])&&isset($_SESSION['email'])&&isset($_SESSION['passWord'])&&isset($_SESSION['bday'])&&isset($_SESSION['gender'])&&isset($_SESSION['pNumber'])){
    header("Location: ../View/Welcome_Customer.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<script src="../Js/validcustomer.js"></script>
<table style="width:40%">
<tr>
<td>
<h1>Create Your Account</h1>
</td>
<td>
Already member? <a href="./Login.php">login </a>here
</td>
</tr>
</table>
</head>
<body>
<table style="width:50%">
<form action="" id="sform" onsubmit=return validation() method="post">
 <tr>
 <td>Phone Number</td>
 <td>Full Name</td>
 </tr>
 <tr>
 <td><input type="text" name="pNumber" id="pNumber"></td>
 <td><input type="text"name="fName" id="fName"></td>
 </tr> 
 <tr>
 <td><?php echo $validPhoneNumber;?><span id="errmsg1"></span></td>
 <td><?php echo $validFullName;?><span id="errmsg2"></span></td>
 </tr>
 <!-- End of 1st row-->
 <tr>
 <td>
 Email
 </td>
 <td>Address</td>
 </tr><!-- End of 2nd row-->

 <tr>
 <td><input type="Email" name="email" id="email"></td>
 <td><input type="text" name='address' id="address"></td>
 </tr> <!-- End of 3rd row-->

 <tr>
 <td><?php echo $validEmail;?><span id="errmsg3"></span></td>
 <td><?php echo $validaddress;?><span id="errmsg5"></span></td>
 </tr>
 <tr>
 <td>Password<br>
 <input type="password" name="passWord" id="passWord"></td>
 <td><input type="submit" name="submit" id="submit"></td>
 </tr>  <!-- End of 4th row-->
 <tr>
 <td><?php echo $validpassWord;?><span id="errmsg4"></span></td>
 </tr>
 <tr>
 <td>
 Birthday
 </td>
 <td>By checking "Sign up"<a href="https://www.daraz.com.bd/terms-of-use/?hybrid=1"> tearms of use</a> and <a href="https://www.daraz.com.bd/privacy-policy/?hybrid=1">Privacy policy</a> </h4></td>
 </tr> <!-- End of 5th row-->
 <tr>
 <td>
 <input type="date" name="bday" id="bday">
 </td>
 <td>Or,Sign Up with</td>
 </tr> <!-- End of 6th row-->
 <tr>
 <td><?php echo $dob.$validBirthdate;?><span id="errmsg6"></span></td>
 </tr>
 <tr>
 <td>Gender</td>
 <td><button type="button">Sign up with facebook</button></td>
 </tr>
 <tr>
 <td><input type="radio" id="male" name="gender" value="Male">Male <input type="radio" id="female" name="gender" value="Female">Female <input type="radio" id="other" name="gender" value="Other">Other</td>
 </tr>
 <tr>
 <td><?php echo $gender.$validRadioButton;?><span id="errortext"></span></td>
 <td><?php echo $error;?></td>
 </tr>

 </form>
 
 </table>
 </body>
 </html>