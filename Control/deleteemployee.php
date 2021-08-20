<?php

  require_once '../Model/db_connect2.php';
$id="$_GET[id]";


$query ="Delete from employee where employee_id='$id';";


 execute($query);
//echo $query;
	header("Location:../view/editdelete.php");




  ?>
