<?php
    session_start();
    include('../Control/checkupdateProduct.php');
    
?>
<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
    <labe>Search Product here:</label><br>
    <input type="text" name="search" id="search">
    <input type="submit" name="button" value="search">
    </form>
        <br>
        <br>
    <form action="" method="post" enctype="multipart/form-data">
<!--    <table>
        <tr>
        <th>Product id</th>
        <th>Product name</th>
        <th>Description</th>
        <th>Status</th>
        <th>Price</th>
        <th>Image</th>
        <th>Category<th>
        </tr>
    </table> -->
<?php
if(isset($_POST['button']))
{
$connection = new db();
$conobj=$connection->OpenCon();
$searchQuery=$connection->SearchProduct($conobj,"product",$_REQUEST['search'],$_SESSION['ID']);
if ($searchQuery->num_rows > 0) {

    // output data of each row
    while($row = $searchQuery->fetch_assoc()) 
    {
        $id=$row['product_id'];
        $path=$row['P_image'];
?>
        
<label>Product Name:</label>
<input type="text" name="pname" value="<?php echo $row['p_name'];?>"><br><br>
<label>Product Description:</label>
<textarea name="pdesc"><?php echo $row['description'];?></textarea><br><br>
<label>Product Status:<label>
<select id="status" name="status">
<option value="Active">Active</option>
<option value="InActive">InActive</option>
</select><br><br>
<script>document.getElementById("status").value = "<?php echo $row['status'];?>";</script>
<label>Product Price:</label>
<input type="number" name="pprice" value="<?php echo $row['price'];?>"><br><br>
<label>Product category:</label>
<select id="category" name="category">
<option value="1">Electronic Device</option>
<option value="2">Electronic Accessories</option>
<option value="3">Home Appliances</option>
<option value="4">Health and Beauty</option>
<option value="5">Men's Fashion</option>
<option value="6">Women's Fashion</option>
<option value="7">Watches and Accessories</option>
<option value="8">Automobiles & Motorbike</option>
</select><br><br>
<script>document.getElementById("category").value ="<?php echo $row['category_id'];?>";</script>
<label>Product Image:</label>
<input type="file" name="pimage"><br><br>
<br>
<br>
<?php
} 
}
}
?>
<input type="submit" name="update" value="Update">
</form>
<a href="../View/VendorDashboard.php"><Button name="back" id="back">Back</Button></a>
</body>
</html>


<!--  





-->
