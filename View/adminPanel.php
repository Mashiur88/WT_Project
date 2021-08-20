<?php
include('header/patheader.php');




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_website";

$var=$_SESSION["loggedinuser"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT count(status) AS total FROM orders WHERE status='cancel'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  if($Ao==0)
  {$Ao='no';}
  else {
    $Ao=$values["total"];
  }

}


if($query="SELECT count(status) AS total FROM order_list WHERE status='Approved'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ta=$values["total"];
  if($Ta==0)
  {$Ta='no';}
  else {
    $Ta=$values["total"];
  }

}


?>

<style>


.main-section {
	display: none;
	width: 66%;
    margin: 0 auto;
    text-align: center;
    padding: 236px 5px;
}
.dashbord {
  width: 42%;
  display: inline-block;
  background-color: #34495e;
  color: #fff;
  margin-top: 50px;
}
.icon-section i {
  font-size: 30px;
  padding: 10px;
  border: 1px solid #fff;
  border-radius: 50%;
  margin-top: -25px;
  margin-bottom: 10px;
  background-color: #34495e;
}
.icon-section p {
  margin: 0px;
  font-size: 20px;
  padding-bottom: 10px;
}
.detail-section {
  background-color: #2f4254;
  padding: 5px 0px;
}
.dashbord .detail-section:hover {
  background-color: #5a5a5a;
  cursor: pointer;
}
.detail-section a {
  color: #fff;
  text-decoration: none;
}
.dashbord-green .icon-section,
.dashbord-green .icon-section i {
  background-color: #16a085;
}
.dashbord-green .detail-section {
  background-color: #149077;
}
.dashbord-orange .icon-section,
.dashbord-orange .icon-section i {
  background-color: #f39c12;
}
.dashbord-orange .detail-section {
  background-color: #da8c10;
}
.dashbord-blue .icon-section,
.dashbord-blue .icon-section i {
  background-color: #2980b9;
}
.dashbord-blue .detail-section {
  background-color: #2573a6;
}
.dashbord-red .icon-section,
.dashbord-red .icon-section i {
  background-color: #e74c3c;
}
.dashbord-red .detail-section {
  background-color: #cf4436;
}
.dashbord-skyblue .icon-section,
.dashbord-skyblue .icon-section i {
  background-color: #8e44ad;
}
.dashbord-skyblue .detail-section {
  background-color: #803d9b;
}


.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}










</style>


<section>
<center><button id="flip" class="button">Expand</button></center>
<div id="panel" class="main-section">
          <div class="dashbord dashbord-red">
            <div class="icon-section">
              <i class="fa fa-users" aria-hidden="true"></i><br>
              <small>Cancel Request</small>
              <p>You Have <?php echo $Ao ; ?> Cancel Request</p>
            </div>
            <div class="detail-section">
              <a href="cancelrequest.php">View All </a>
            </div>
          </div>
          <div class="dashbord dashbord-green">
            <div class="icon-section">
              <i class="fa fa-users" aria-hidden="true"></i><br>
              <small>Approved Order</small>
              <p>You have <?php echo $Ta ; ?> Order Running</p>
            </div>
            <div class="detail-section">
              <a href="approvelist.php">View All </a>
            </div>
          </div>
          
         
          </div>











</section>
  </body>
</html>
<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
