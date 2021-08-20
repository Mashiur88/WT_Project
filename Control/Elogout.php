<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../View/Employee_login.php"); // Redirecting To Home Page
}
?>