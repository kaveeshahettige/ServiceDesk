

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script>
       function validateForm(){
            if(document.sform.n_username.value==""){
                alert("Input your name");
                return false;
            }
            if(document.sform.email.value=="" && document.sform.phone_number.value==""){
                alert("You should sumbit atleast one of your contact details");
                return false;
            }
            if(document.sform.phone_number.value.length >0 && document.sform.phone_number.value.length < 10 && document.sform.phone_number.value.length > 10){
                alert("Your phone number is invalid,Please check again");
                return false;
            }
            var emailID = document.sform.email.value;
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
            if (emailID.length>0 && atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter  a correct email ID");
                return false;
            }
            if (document.sform.password.value.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false;
            }
            return true;
    }
     </script>
     <style>
      #arrow{
        position: absolute;
    right: 10px;
    bottom: 19px;
    font-size: 24px;
    visibility: hidden;
      }
      
     </style>
   </head>
<body>
<?php
session_start();
$username=$_SESSION['username'];
//echo "$username";

?>
  <div class="container">
    <div class="title">Update User Info</div>
    <div class="content">
	<form action="update.php" name="sform" method="post" onsubmit="return validateForm()">
			<label>New username:</label>
			<input type="text" name="n_username" required><br />
			<label>Email:</label>
			<input type="email" name="email" required><br /><br />
			<label>Password:</label>
			<input type="password" name="password"><br />
			<label>Phone Number:</label>
			<input type="text" name="phone_number"><br />

			

			<input type="submit" value="Update"><br />
		</form>
    </div>
  </div>
  <div id="arrow">
    <a href="2.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
</body>
</html>

