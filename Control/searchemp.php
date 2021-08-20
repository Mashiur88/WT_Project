

<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "ecommerce_website");
$sql = "SELECT * FROM employee WHERE name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		
                 echo "	<tr>
		          <td>".$row['employee_id']."</td>
		          <td>".$row['name']."</td>
		          <td>".$row['email']."</td>
		          <td>".$row['gender']."</td>
				  <td>".$row['dob']."</td>
		          <td>".$row['phone']."</td>
				   
		        </tr>";
                  }
             
	}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
