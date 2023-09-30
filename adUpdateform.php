
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="styles/style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="title">Update Customer</div>
    <div class="content">
	<form action="adUpdate.php" method="post">
			<label>User ID:</label>
			<input type="text" name="user_id" required><br />
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
    <a href="1.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
</body>
</html>