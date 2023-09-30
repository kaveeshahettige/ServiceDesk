<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sample"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


session_start();
$username=$_SESSION['username'];
echo "$username";

//
$service_id = $_POST['service_id'];
$new_servicename = $_POST['service_name'];
$new_servicedes = $_POST['service_description'];
$new_price = $_POST['service_price'];

// Sanitize user input to prevent SQL injection attacks
$new_servicename = mysqli_real_escape_string($conn, $new_servicename);
$new_servicedes = mysqli_real_escape_string($conn, $new_servicedes);
$new_price = mysqli_real_escape_string($conn, $new_price);



// Update user information in the database
$sql = "UPDATE services SET service_name='$new_servicename', service_description='$new_servicedes', service_price='$new_price' WHERE service_id=$service_id";
if ($conn->query($sql) === TRUE) {
// Show an alert message and redirect the user to the main page 
echo "<script>alert('Service information updated successfully.'); setTimeout(function(){window.location.href='1.php';}, 0);</script>";
//

} else {
    echo "Error updating user information: " . $conn->error;
}

$conn->close();
?>
