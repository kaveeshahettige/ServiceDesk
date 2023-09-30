

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
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
    <div class="title">Update services</div>
    <div class="content">
	<form action="updateservices.php" method="post">
			<label>service-ID:</label>
			<input type="text" name="service_id" required><br />
			<label>service-Name:</label>
			<input type="text" name="service_name" required><br />
			<label>service-Description:</label>
			<input type="text" name="service_description" required><br />
			<label>service-Price:</label>
			<input type="text" name="service_price" required><br />
			

			<input type="submit" value="Update"><br />
		</form>
    </div>
  </div>
  <div id="arrow">
    <a href="1.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
</body>
</html>