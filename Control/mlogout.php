<?php
session_start();

if(session_destroy()) //destroyed all seassion
{
header("Location: ../View/Employeeform.php"); //redircted home page

}

?>