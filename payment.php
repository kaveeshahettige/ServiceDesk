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
//echo "$username";

//$sql = "SELECT user_id FROM users WHERE username = '$username'";

//
//session_start();
   $username=$_SESSION['username'];
   $service_id=$_SESSION['service_id'];
   $order_date=$_SESSION['order_date'];

$sql = "SELECT user_id FROM Users WHERE username = '$username'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // User found, get the user_id
  $row = $result->fetch_assoc();
  $user_id = $row["user_id"];
} else {
  // User not found
}
//echo "$user_id";
//echo "$order_date";

//$order_id = $_SESSION['order_id'];
//
//$sql = "SELECT order_id FROM Orders WHERE user_id = '$user_id', service_id = '$service_id', order_date= '$order_date'";
$sql = "SELECT order_id FROM Orders WHERE user_id = '$user_id' AND service_id = '$service_id' AND order_date= '$order_date'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
  // User found, get the user_id
  $row = $result->fetch_assoc();
  $order_id = $row["order_id"];
} else {
  // User not found
}
//echo "$order_id";
//
//
$sql = "SELECT service_price FROM Services WHERE service_id = '$service_id'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
  // User found, get the user_id
  $row = $result->fetch_assoc();
  $service_price = $row["service_price"];
} else {
  // User not found
}

//
$payment_date = $_POST['payment_date'];
$payment_amount = $_POST['payment_amount'];

if ($payment_amount<$service_price) {
  $remain1=$service_price-$payment_amount;
  echo "You have to pay $remain1 remaining amount of money when you receive the order <br />";
} else {
  $remain=$payment_amount-$service_price;
  echo "You will recieve your service.<br />";
  echo "You have $remain remaining amount of money with this account";
}


$sql="INSERT INTO Payments (order_id, payment_date, payment_amount)VALUES ('$order_id', '$payment_date', '$payment_amount')";

if (!mysqli_query($con,$sql)) {
	echo "Error adding data to the table: " . mysqli_error($con);
	
} else 
{
 	//echo "Payment is successfull.";
   session_start();
   $username=$_SESSION['username'];
   $service_id=$_SESSION['service_id'];
   echo "$username <br />";
   echo "$service_id <br />";
	 echo "<script>alert('Your payment is successfull.'); setTimeout(function(){window.location.href='2.php';}, 7000);</script>";
}

mysqli_close($con);
?>



</body>
</html>


