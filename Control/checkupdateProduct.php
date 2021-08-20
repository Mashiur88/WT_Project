<?php
include('../Model/db1.php');
if(isset($_POST['update']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();
  /*  if(!isset($_POST['pimage']))
    { $target_destination=$path; }
    else
    { */
    $target_destination="../Images/".$_FILES['pimage']['name'];
    
    $userQuery=$connection->updateProduct($conobj,"product",$_POST['pname'],$_POST['pdesc'],$_POST['status'],$_POST['pprice'],$target_destination,$_POST['category'],$_SESSION['ID']);
    if($userQuery==true)
    {
        echo "database Updated";
    }
    else{ echo "not updated";}
    $connection->CloseCon($conobj);
}
?>