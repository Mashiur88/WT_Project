<?php
include('../Model/db1.php');
$error="";

if(isset($_POST['add']))
{
    if (empty($_POST['pname']) || empty($_POST['pdesc'])|| empty($_POST['status']) || empty($_POST['pprice'])|| empty($_POST['category']) || empty($_FILES['pimage']['name'])) 
    {
        $error = "input given is invalid";
    }
    else
        {

        $connection = new db();
        $conobj=$connection->OpenCon();
        $pid=rand(100000,1000000);
        $target_destination="../Images/".$_FILES['pimage']['name'];
        
        $userQuery=$connection->AddProduct($conobj,"product", $pid, $_POST['pname'],$_POST['pdesc'], $_POST['status'],$_POST["pprice"],$target_destination,$_SESSION["ID"],$_POST['category']);
        if($userQuery==TRUE)
        {
            if (move_uploaded_file($_FILES["pimage"]["tmp_name"],  $target_destination)) {
              echo "file upload done";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        else
        {
            echo "could not update";    
        }
        $connection->CloseCon($conobj);
        
        }


}