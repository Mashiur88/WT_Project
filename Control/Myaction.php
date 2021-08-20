<?php
session_start();
include('../Model/db.php');
$validFullName="";
$validEmail="";
$validpassWord="";
$validPhoneNumber="";
$validBirthdate="";
$validRadioButton="";
$validaddress="";
$error="";
$id="";
$name=$email=$password=$phn_num=$gender=$dob=$address="";
if(isset($_POST['submit']))
{
    if(empty($_REQUEST["pNumber"])||(strlen($_REQUEST["pNumber"])<1))
    {
        $validPhoneNumber="you must enter your Phone Number";
    }
    else
    {
        $_SESSION["pNumber"]=$_REQUEST["pNumber"];
        $phn_num=$_REQUEST["pNumber"];
    } 
    if(empty($_REQUEST["fName"])||(strlen($_REQUEST["fName"])<1))
    {
        $validFullName="you must enter your Name";
    }
    else
    {
        $_SESSION["fName"]=$_REQUEST["fName"];
        $name=$_REQUEST["fName"];
    } 
    if(empty($_REQUEST["email"]))
    {
        $validEmail="you must enter email";
    }
    else
    {
        $_SESSION["email"]=$_REQUEST["email"];
        $email=$_REQUEST["email"];
    }
    if(empty($_REQUEST["address"])||(strlen($_REQUEST["address"])<1))
    {
        $validaddress="you must enter your Address";
    }
    else
    {
        $_SESSION["address"]=$_REQUEST["address"];
        $address=$_REQUEST["address"];
    } 
    if(empty($_REQUEST["passWord"])||(strlen($_REQUEST["passWord"])<1))
    {
        $validpassWord="you must enter password";
    }
    else
    {
        $_SESSION["passWord"]=$_REQUEST["passWord"];
        $password=$_REQUEST["passWord"];
    }
    if(isset($_REQUEST["gender"]))
    {
        $_SESSION["gender"]=$_REQUEST["gender"];
        $gender=$_REQUEST["gender"];
    }
    else
    {
        $validRadioButton="please select your gender";
    }

    if(empty($_POST["bday"]))
    {
        $validBirthdate="Select your birth date";
    }
    else
    {
        $_SESSION["bday"]=$_POST["bday"];
        $dob=$_POST["bday"];
    }
    if(isset($_SESSION['pNumber'])&&isset($_SESSION['fName'])&&isset($_SESSION['email'])&&isset($_SESSION['passWord'])&&isset($_SESSION['bday'])&&isset($_SESSION['gender'])&&isset($_SESSION['pNumber']))
    {
    $id=rand(100000,1000000);
    $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->insertCustomer($conobj,"customer",$id,$name,$password,$gender,$email,$address,$dob,$phn_num);
        if($userQuery==TRUE)
        {
            $error="Data Inserted";
        }
        else
        {
            $error="No Data Inserted";
        }
    }


}
?>