<?php
  $name="noor232";
   $password="noor12";
if (isset($_POST['submit'])) {

	$getname=$_POST['name'];
	$getpassword=$_POST['password'];
	if ($getname==$name and $getpassword==$password) {
		if (isset($_POST['rm'])) {
			setcookie('name',$getname,time()+60*60*7 );

		}
			session_start();
			$_SESSION['name']=$getname;
			header("location: ../View/PatientPanel.php");

		
	}else{
		echo "Username or Password is Invalid.<br> click here to
		<a href='../index.php'> try again </a> ";

	}
}else{
	header("location: ../index.php");
}

  ?>