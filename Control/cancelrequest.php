<?php

  require_once '../Model/db_connect2.php';
$id="$_GET[id]";


$query ="DELETE FROM `orders` WHERE `order_id` = '$id'";


 execute($query);

	header("Location:../view/cancelrequest.php");




  ?>
