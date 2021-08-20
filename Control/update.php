<?php
$var;
  require_once '../Model/db_connect2.php';

if(isset($_POST["updateemp"]))
  {
    updateemp();
  }
else if(isset($_POST["vendorupdate"]))
  {
    updateven();
  }
function updateemp(){
	
	 
      $eid=$_POST['ouname'];
      $ename=$_POST['pname'];
      $eemail=$_POST['oaddress'];
      $egender=$_POST['dspecial'];
      $ephone=$_POST['ophone'];
	  $password=$_POST['ocpass'];
	  
     $sql1="update employee set name = '$ename' , email = '$eemail' , phone = '$ephone' , gender = '$egender',password='$password' where employee_id = '$eid' ";
	
	execute($sql1);
	header("Location:../View/editdelete.php");
	
	
}


function updateven(){
	
	 
      $eid=$_POST['ouname'];
      $ename=$_POST['pname'];
      $address=$_POST['oaddress'];
      
      $Accountno=$_POST['ophone'];
	  $password=$_POST['ocpass'];
	  
     $sql1="update vendor set username = '$ename',accountno = '$Accountno',addresss = '$address',password='$password' where vendor_id = '$eid' ";
	//echo $sql1;
	execute($sql1);
	header("Location:../View/editdelete.php");
	
	
}

  ?>
