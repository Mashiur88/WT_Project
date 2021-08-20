<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ecommerce_website";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE Customer_id='". $username."' AND password='". $password."'");
 return $result;
 }
 function CheckVendor($conn,$table,$username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE vendor_id='". $username."' AND password='". $password."'");
 return $result;
 }
 function CheckEmp($conn,$table,$username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE employee_id='". $username."' AND password='". $password."'");
 return $result;
 }

 function GetUser($conn,$table,$id)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE Customer_id='". $id."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
    $result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 function insertCustomer($conn,$table,$userid,$username,$password,$gender,$email,$address,$dob,$phn_num)
 {
    $result = $conn->query("INSERT INTO " .$table." (customer_id, username, password, gender, email, address, dob, phn_num) VALUES ('$userid','$username','$password','$gender','$email','$address','$dob','$phn_num')");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$password,$gender,$email,$address,$dob,$phn_num,$id)
 {
     $sql = "UPDATE $table SET username='$username',password='$password',email='$email',address='$address',dob='$dob',gender='$gender',phn_num='$phn_num'  WHERE customer_id='$id'";

    if ($conn->query($sql) == TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE;
    }
    return  $result;
 }
 function DeleteUser($conn,$table,$id)
 {
    $sql="DELETE FROM .$table. WHERE customer_id='$id'";
    return result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>