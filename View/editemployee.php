
<?php
include('header/patheader.php');

$id="$_GET[id]";
	$name="$_GET[name]";
	$email="$_GET[email]";
	$gender="$_GET[gender]";
	$phone="$_GET[phone]";
	$password="$_GET[password]";
?>

<style>

.box {
  width: 328px;
    padding: 19px;
    position: absolute;
    top: 56%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type="text"],
.box input[type="password"] {
  border: 0;
  background: none;
  display: block;
  margin: 05px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
  width: 280px;
  border-color: yellowgreen;
}
.box input[type="submit"] {
  border: 0;
  background: none;
  display: block;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type="submit"]:hover {
  background: #ff4500;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}

</style>
<section>
<form class="box" action="../Control/update.php"onsubmit="return validation()" method="post">

      <div id="error_message"></div>
      <h1>Employee Update</h1>
      <input type="text"id="uname" name="ouname"value="<?php echo $id ?>" placeholder="Employee Id" /readonly>
      <input type="text"id="user" name="pname" value="<?php echo $name ?>" placeholder="Full Name" />
      <input type="text"id="mobileNumber" name="ophone" value="<?php echo $phone ?>" placeholder="Phone Number">
     
      <input type="text"id="emails" name="oaddress"  value="<?php echo $email?>" placeholder="Email" />
      <input type="password" id="pass" name="ocpass" value="<?php echo $password?>" placeholder="Password" />
	  <input type="text"id="spe" name="dspecial"value="<?php echo $gender?>" placeholder="Gender" />
	   
      <input type="submit" name="updateemp" value="Update" />
    </form>


	</div>
	</section>
  </body>
</html>
<script type="text/javascript">


		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;

			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;
      	var uid = document.getElementById('uname').value;
        	var speciality = document.getElementById('spe').value;
          	var Dob = document.getElementById('rono').value;
            	
				
			
			


              error_message.style.padding = "10px";



			if(user == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the name field";
				return false;
			}
			if((user.length <= 2) || (user.length > 25)) {
				document.getElementById('error_message').innerHTML =" ** name lenght must be between 2 and 25";
				return false;
			}
			if(!isNaN(user)){
				document.getElementById('error_message').innerHTML =" ** only characters are allowed in Name";
				return false;
			}







			if(pass == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('error_message').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;
			}







			if(mobileNumber == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('error_message').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=11){
				document.getElementById('error_message').innerHTML =" ** Mobile Number must be 11 digits only";
				return false;
			}



			if(speciality == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the gender field";
				return false;
			}
if((speciality.length <=3) || (speciality.length  >7)) {
				document.getElementById('error_message').innerHTML =" ** Gender must be Male or female";
				return false;
			}
			
      if(!isNaN(speciality)){
        document.getElementById('error_message').innerHTML =" ** only characters are allowed";
        return false;
      }



      if(uid == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the username field";
        return false;
      }

      if((uid.length <= 2) || (uid.length > 12)) {
        document.getElementById('error_message').innerHTML =" ** username lenght must be between 2 and 12";
        return false;
      }




      if(emails == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Email field";
        return false;
      }

      if(emails.indexOf('@')<=0){
				document.getElementById('error_message').innerHTML="Email Address not Valid";
				return false;
			}     
			if ((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')) {
				document.getElementById('error_message').innerHTML="Email Address not Valid";
				return false;
			}
		




      



      
      alert("Employee Update Successfully!");
      return true;
		}

	</script>
