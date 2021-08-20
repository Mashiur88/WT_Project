<?php

  require_once '../Model/db_connect2.php';
$id="$_GET[id]";


$query ="Delete from vendor where vendor_id='$id';";

echo $query;
 
 execute($query);

	header("Location:../view/editdelete.php");




  ?>
