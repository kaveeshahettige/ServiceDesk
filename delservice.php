<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID of the record to be deleted
$service_id = $_POST['service_id'];


// Construct the SQL query to delete the record
$sql = "DELETE FROM  services WHERE service_id='$service_id'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Service Deleted Successfully.'); setTimeout(function(){window.location.href='1.php';}, 0);</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>