<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 align="center">Registration Form</h1>
<div>
<hr />
<form action="insert.php" method="post">

User Name : <input type="text" name="name"><br />
Email : <input type="text" name="email"><br />
Password : <input type="password" name="password"><br /><br />
Phone Number : <input type="text" name="phone_number"><br /><br />
  
<input  type="submit" name="Insert"><br />
<hr />

</form>
</div>

</body>

</html>


