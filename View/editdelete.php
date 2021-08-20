<?php
include('header/patheader.php');
require_once ('../Control/orderinfo.php');
$info = getemployee();
$info2 = getvendor();


?>
<style>
  table {
    border-collapse: collapse;
  margin-left: 272px;
  color: white;
 
  border: transparent;
  }

  th, td {
    text-align: left;
    padding: 8px;
    background: black;
}
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
    background-color: #4CAF50;
    color: white;
  }

  table tr:not(:first-child){
                 cursor: pointer;transition: all .25s ease-in-out;
             }
             table tr:not(:first-child):hover{background-color: #ddd;}

             .btn {
     background-color: red;
     border: none;
     color: white;
     padding: 12px 16px;
     font-size: 16px;
     cursor: pointer;
  	 border-radius: 10px;
   }


   .btn:hover {
     background-color: RoyalBlue;
   }

   a:link{


     color: white;
     text-decoration: none;

   }
   a:visited{

  color: white;

   }
#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 34%;
  font-size: 16px;
  padding: 12px 74px 12px 40px;
  border: 1px solid #ddd;
margin-bottom: 17px;
    margin-top: 22px;
    margin-left: 422px;

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
#tableemployee{display:none;}
#tablevendor{display:none;}

      * {
        box-sizing: border-box;
      }
      .openBtn {
        display: flex;
        justify-content: left;
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color: #1c87c9;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }
      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        max-width: 300px;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }

  </style>
<section>

 
 

<center><button id="flip" class="button">Employee</button></center>
<center><button id="flip2" class="button">Vendor</button></center>
<div id="tableemployee">
 <table id="table" border="1">
              <thead>
                <th>Employee_id</th>
                  <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Dob</th>

            <th>Phone</th>
            
            <th>------------------</th>
            <th>------------------</th>
              </thead>


              <tbody id="output">
                <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                      echo "<td>".$infos["employee_id"]."</td>";
                        echo "<td>".$infos["name"]."</td>";
                      echo "<td>".$infos["email"]."</td>";
              echo "<td>".$infos["gender"]."</td>";
                echo "<td>".$infos["dob"]."</td>";
                        echo "<td>".$infos["phone"]."</td>";
                     
            echo '<td><button class="btn"><a href="../Controller/deleteemployee.php?id='.$infos["employee_id"].'" i class="fa fa-trash">  Delete</a></td>';
echo '<td><button class="btn"><a href="editemployee.php?id='.$infos["employee_id"].'&amp; name='.$infos["name"].'&amp;email='.$infos["email"].'&amp;gender='.$infos["gender"].'&amp;phone='.$infos["phone"].'&amp;password='.$infos["password"].'" i class="fa fa-thumbs-up">  Edit</a></td>';
                    echo "</tr>";
                  }
                ?>

              </tbody>








            </table>
			</div>
			   
<div id="tablevendor">
 <table id="table" border="1">
              <thead>
                <th>Vendor_ID</th>
                  <th>Name</th>
                <th>Address</th>
                <th>Account No</th>
               <th>------------------</th>
            <th>------------------</th>
            
           
              </thead>


              <tbody id="output">
                <?php
                  foreach($info2 as $infos)
                  {
                    echo "<tr>";
                      echo "<td>".$infos["vendor_id"]."</td>";
                        echo "<td>".$infos["username"]."</td>";
                      echo "<td>".$infos["addresss"]."</td>";
              echo "<td>".$infos["accountno"]."</td>";
               
                     echo '<td><button class="btn"><a href="../Controller/deletevendor.php?id='.$infos["vendor_id"].'" i class="fa fa-trash">  Delete</a></td>';

            echo '<td><button class="btn"><a href="editvendor.php?id='.$infos["vendor_id"].'&amp; name='.$infos["username"].'&amp;addresss='.$infos["addresss"].'&amp;accountno='.$infos["accountno"].'&amp;password='.$infos["password"].'" i class="fa fa-thumbs-up">  Edit</a></td>';
                    echo "</tr>";
                  }
                ?>

              </tbody>








            </table>

</div>
     
   
	  </section>
  </body>
</html>


      
<script>

$(document).ready(function(){
  $("#flip2").click(function(){
    $("#tablevendor").slideToggle("slow");
  });
  $("#flip").click(function(){
    $("#tableemployee").slideToggle("slow");
  });
});
</script> 