<?php
       session_start();
   	   $validFullName="";
       $validEmail="";
       $validUserName="";
       $validPassWord="";
       $validCatagory="";
       $validCheckbox="";
       $validvaddress="";
       $validvaccountnum="";
       $h1=$h2=$h3=$h4=$h5="";
       $vname=$email=$uname=$password=$catagory=$vaddress=$vaccountnum="";
       if($_SERVER["REQUEST_METHOD"]=="POST")
       {
           $vname=$_REQUEST["vname"];
           $email=$_REQUEST["email"];
           $uname=$_REQUEST["uname"];
           $password=$_REQUEST["passWord"];
           $catagory=$_POST["catagory"];
           if(empty($_REQUEST["vname"])||(strlen($_REQUEST["vname"])<1))
           {
               $validFullName="you must enter your Valid Id";
           }
           else
           {
            $_SESSION["vname"]=$_REQUEST["vname"];
           }
           if(empty($_REQUEST["email"])||!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\+_\-]+\.)+[a-z]{2,6}$/ix",$email))
           {
               $validEmail="you must enter your email";
           }
           else
           {
            $_SESSION["email"]=$_REQUEST["email"];
           }
           if(empty($_REQUEST["uname"])||(strlen($_REQUEST["uname"])<1))
           {
               $validUserName="you must enter your User name";
           }
           else
           {
            $_SESSION["uname"]=$_REQUEST["uname"];
           }


           if(empty($_REQUEST["passWord"])||(strlen($_REQUEST["passWord"])<1))
           {
               $validPassWord="you must enter your password";
           }
           else
           {
            $_SESSION["passWord"]=$_REQUEST["passWord"];
           }
        
           if(!isset($_REQUEST["catagory"]))
           {
               $validCatagory="please select at least one";
           }
           else
           {
            $_SESSION["catagory"]=$catagory;
       
           }
           if(!isset($_REQUEST["checkbox"]))
           {
            $validCheckbox="please click the box";
           }
           if(empty($_REQUEST["vaddress"])||(strlen($_REQUEST["vaddress"])<1))
           {
               $validvaddress="you must enter your address";
           }
           else
           {
            $_SESSION["vaddress"]=$_REQUEST["vaddress"];
           }
           if(empty($_REQUEST["vaccountnum"])||(strlen($_REQUEST["vaccountnum"])<1))
           {
               $validvaccountnum="you must enter your account num";
           }
           else
           {
            $_SESSION["vaccountnum"]=$_REQUEST["vaccountnum"];
           }


    }
?>