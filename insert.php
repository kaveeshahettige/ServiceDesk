<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";

$con = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()){
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully" . "<br \>";


$name = $_POST['name'];
$email = $_POST['email'];
$password=$_POST['password'];
$pn = $_POST['phone_number'];

$sql="INSERT INTO Users (username, email, password, phone_number)VALUES ('$name', '$email', '$password', '$pn')";

if (!mysqli_query($con,$sql)) {
	echo "Error adding data to the table: " . mysqli_error($con);
	
} else 
{
 	//echo "Registration Successful";
	 echo "<script>alert('User Registration Successful.'); setTimeout(function(){window.location.href='loginform.php';}, 0);</script>";
}

mysqli_close($con);
?>
