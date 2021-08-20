<?php

  require_once '../Model/db_connect2.php';
$id="$_GET[id]";


$query ="UPDATE `order_list` SET `status` = 'Approved' WHERE `order_id` = '$id';";


 execute($query);

	header("Location:../view/rejectlist.php");




  ?>
