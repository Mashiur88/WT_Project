<?php
session_start();
include('../Model/db.php');
if(isset($_POST['submit']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $id=$_SESSION['ID'];
    $userQuery=$connection->DeleteUser($conobj,"customer",$id);
    if($userQuery==true)
    {
        echo "User deleted";
    }
    else{ echo "not deleted";}
    $connection->CloseCon($conobj);
}

?>
<html>
    <body>
    <a href="../Control/sessionout.php"><button name="ok">ok</button></a><br>
</body>
</html>