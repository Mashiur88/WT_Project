<?php
session_start();
$validName="";
$validEmail="";
$validpassWord="";
$validRadioButton="";
$validUser="";
$validDate="";
$name=$email=$password=$id=$date="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $email = $_REQUEST["email"];	
	if(empty($_REQUEST["username"])||(strlen($_REQUEST["username"])<1))
    {
        $validName="you must enter Username";
    }
    else
    {
        $_SESSION["username"]=$_REQUEST["username"];
    }
	if(empty($_REQUEST["email"])||!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\+_\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $validEmail="you must enter email";
    }
    else
    {
        $_SESSION["email"]=$_REQUEST["email"];
    }
	if(empty($_REQUEST["passWord"])||(strlen($_REQUEST["passWord"])<1))
    {
        $validpassWord="you must enter password";
    }
    else
    {
        $_SESSION["passWord"]=$_REQUEST["passWord"];
    }
	if(empty($_REQUEST["Userid"])||(strlen($_REQUEST["Userid"])<1))
    {
        $validUser="you must enter Username";
    }
    else
    {
        $_SESSION["Userid"]=$_REQUEST["Userid"];
    }
	if(isset($_REQUEST["gender"]))
    {
        $_SESSION["gender"]=$_REQUEST["gender"];
    }
    else
    {
        $validRadioButton="please select at least one radio";
    }
	if(empty($_REQUEST["dob"]))
    {
        $validDate="please select Date of birth";
    }
	else
	{
		$_SESSION["dob"]=$_REQUEST["dob"];
	}
}
?>