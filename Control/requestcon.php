<?php
$var;
  require_once '../Model/db_connect2.php';

if(isset($_POST["insertreq"]))
  {
    insertrequest();
  }
  
  
  function insertrequest()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $roomno=$_POST["rno"];
  $need=$_POST["msg"];


  $query="INSERT INTO patientreq(patientid,need,roomno) VALUES ('$var','$need','$roomno')";

execute($query);
 header("Location:../View/request.php");


}




  ?>