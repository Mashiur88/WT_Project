

<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "ecommerce_website");
$sql = "SELECT * FROM vendor WHERE username LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		
                 echo "	<tr>
		          <td>".$row['vendor_id']."</td>
		          <td>".$row['username']."</td>
		          <td>".$row['addresss']."</td>
		          <td>".$row['accountno']."</td>
				 
		        </tr>";
                  }
             
	}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
