<?php
session_start();
include('../Model/db.php');
if(empty($_SESSION['ID']))
{ header('HomePage.php');}
$id=$_SESSION['ID'];

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUser($conobj,"customer",$id);
?>
<!DOCTYPE html>
<html>
<head>
<script src="../Js/Edit.js"></script>
    HI! <?php echo $id;?>
</head>
<body>

<?php
if ($MyQuery->num_rows > 0) {
    while($row = $MyQuery->fetch_assoc()) {
    echo "Your ID: ".$row['customer_id']."<br>";
    echo "Your Name: ".$row['username']."<br>";
    echo "Your Gender: ".$row['gender']."<br>";
    echo "Your email: ".$row['email']."<br>";
    echo "Your Address: ".$row['address']."<br>";
    echo "Your Date of Birth: ".$row['dob']."<br>";
    echo "Your Phone Number: ".$row['phn_num']."<br>";
    }
}
?>
<label>Update your information:</label><br>
<a href="../View/Update.php"><button name="update">Update</button></a><br>
<label>Delete your account:</label><br>
<a href="../View/Delete.php"><button name="delete">Delete</button></a><br>
<a href="../Control/sessionout.php">LogOut</a>

</body>
</html>