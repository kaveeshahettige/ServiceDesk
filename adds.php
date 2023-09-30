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


$service_name = $_POST['service_name'];
$service_description = $_POST['service_description'];
$service_price = $_POST['service_price'];


$sql="INSERT INTO Services (service_name, service_description, service_price)VALUES ('$service_name', '$service_description', '$service_price')";

if (!mysqli_query($con,$sql)) {
	echo "Error adding data to the table: " . mysqli_error($con);
	
} else 
{
 	//echo "Registration Successful";
	 echo "<script>alert('Adding Service Successful.'); setTimeout(function(){window.location.href='1.php';}, 0);</script>";
}

mysqli_close($con);
?>
