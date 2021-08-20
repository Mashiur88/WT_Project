<?php
$var;
  require_once '../Model/db_connect2.php';

if(isset($_POST["empsignup"]))
  {
    insertemp();
  }


  function insertemp()
{

  $employeeid=$_POST["ouname"];
  $fullname=$_POST["pname"];
  $phone=$_POST["ophone"];
  
  $password=$_POST["ocpass"];
  $gender=$_POST["dspecial"];
  $email=$_POST["oaddress"];
  $Dob=$_POST["roono"];




  $query="INSERT INTO `employee` (`employee_id`, `password`, `name`, `email`, `gender`, `dob`, `phone`) VALUES ('$employeeid', '$password', '$fullname', '$email', '$gender', '$Dob', '$phone');";
//echo $query;
execute($query);
 header("Location:../View/addemployee.php");


}




  ?>
