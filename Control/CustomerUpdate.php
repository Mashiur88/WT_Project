<?php
include('../Model/db.php');
if(isset($_POST['submit']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $id=$_SESSION['ID'];
    $userQuery=$connection->UpdateUser($conobj,"customer",$_POST['fName'],$_POST['passWord'],$_POST['gender'],$_POST['email'],$_POST['address'],$_POST['bday'],$_POST['pNumber'],$id);
    if($userQuery==true)
    {
        echo "database Updated";
    }
    else{ echo "not updated";}
    $connection->CloseCon($conobj);
}

?>