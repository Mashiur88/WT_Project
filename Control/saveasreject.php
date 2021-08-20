<?php

  require_once '../Model/db_connect2.php';
$id="$_GET[id]";
$price="$_GET[price]";
$customerid="$_GET[customerid]";
$date="$_GET[date]";

$query ="INSERT INTO `order_list` (`order_id`, `status`, `total_price`, `customer_id`, `date`) VALUES ('$id','Reject', '$price', '$customerid', '$date');";
$query2 ="DELETE FROM `orders` WHERE `order_id` = '$id'";

 execute($query);
 execute($query2);
	header("Location:../view/orderlist.php");




  ?>
