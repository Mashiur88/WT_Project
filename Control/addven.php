<?php
$var;
  require_once '../Model/db_connect2.php';

if(isset($_POST["empsignup"]))
  {
    insertemp();
  }


  function insertemp()
{

  $vendorid=$_POST["ouname"];
  $fullname=$_POST["pname"];
  $registration=$_POST["ophone"];
  
  $password=$_POST["ocpass"];
  
  $address=$_POST["oaddress"];
 




  $query="INSERT INTO `vendor` (`vendor_id`, `password`, `username`, `addresss`, `accountno`) VALUES ('$vendorid', '$password', '$fullname', '$address','$registration');";
//echo $query;
execute($query);
 header("Location:../View/addvendor.php");


}




  ?>
