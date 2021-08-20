<?php
include('./Model/db1.php');
$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"product");
if(isset($_POST['btn']))
{
    $name=$_POST['search'];
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->SearchProduct1($conobj,"product",$name);
    
}

?>