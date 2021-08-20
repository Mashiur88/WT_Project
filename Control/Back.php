<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../View/CustomerSignup.php"); // Redirecting To Home Page
}
?>