
<html>
<body>

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

$username=$_SESSION['username'];

$sql = "SELECT user_id FROM Users WHERE username = '$username'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // User found, get the user_id
  $row = $result->fetch_assoc();
  $user_id = $row["user_id"];
} else {
  // User not found
}
echo "$user_id";
$service_id = $_POST['service_id'];
$order_place = $_POST['order_place'];
$order_time = $_POST['order_time'];
session_start();
$_SESSION['service_id'] = $service_id;
$order_date = $_POST['order_date'];
$_SESSION['order_date'] = $order_date;

$sql="INSERT INTO Orders (service_id,user_id, order_date, order_place, order_time)VALUES ('$service_id', '$user_id', '$order_date', '$order_place', '$order_time')";

if (!mysqli_query($con,$sql)) {
	echo "Error adding data to the table: " . mysqli_error($con);
	
} else 
{
 	//echo "Your order is successfull.";
   echo "<script>alert('Your order is successfull.'); setTimeout(function(){window.location.href='paymentform.php';}, 0);</script>";
}

mysqli_close($con);

?>
<h1>You can pay after the delivery or Now?</h1>
<a href="paymentform.php">Click here to do your payment</a>

</body>
</html>


