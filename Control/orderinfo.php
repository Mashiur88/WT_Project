<?php
$var;
  require_once '../Model/db_connect2.php';






  function getorderlist()
  {


    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM orders";
    $product=get($query);
    return $product;


  }


  function getrejectlist()
  {



    $query="SELECT * FROM order_list where status='Reject'";
    $product=get($query);
    return $product;


  }



  function getapprovedlist()
  {



    $query="SELECT * FROM order_list where status='Approved'";
    $product=get($query);
    return $product;


  }


  function getcancelrequest()
  {



    $query="SELECT * FROM orders where status='cancel'";
    $product=get($query);
    return $product;


  }
  function getemployee()
  {



    $query="SELECT * FROM employee ";
    $product=get($query);
    return $product;


  }

 function getvendor()
  {



    $query="SELECT * FROM vendor ";
    $product=get($query);
    return $product;


  }
  ?>
