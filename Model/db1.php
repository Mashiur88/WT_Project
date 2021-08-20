<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ecommerce_website";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
 }
 function AddProduct($conn,$table,$pid,$pname,$description,$status,$price,$p_image,$vid,$cid)
 {
    $result = $conn->query("INSERT INTO " .$table." (product_id, p_name, description, status, price, P_image, vendor_id, category_id) VALUES ('$pid','$pname','$description','$status','$price','$p_image','$vid','$cid')");
 return $result;
 }
 function updateProduct($conn,$table,$pname,$description,$status,$price,$path,$category,$id)
 {
    $result = $conn->query("UPDATE " .$table. " SET p_name='$pname', description='$description', status='$status', price='$price', P_image='$path', category_id='$category' WHERE product_id='$id'");
 return $result;
 }
 function ShowAll($conn,$table)
 {
    $result = $conn->query("SELECT * FROM ".$table);
 return $result;
 }
 function SearchProduct($conn,$table,$name,$id)
 {
    $result = $conn->query("SELECT * FROM ".$table." WHERE p_name='$name' AND vendor_id='$id'");
 return $result;
 }
 function SearchProduct1($conn,$table,$name)
 {
    $result = $conn->query("SELECT * FROM ".$table." WHERE p_name='$name'");
 return $result;
 }
 function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
