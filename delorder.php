<?php
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
$order_id = $_POST['order_id'];

// Construct the SQL query to delete the record
$sql = "DELETE FROM  orders WHERE order_id='$order_id'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('order Deleted Successfully,You will be refunded.'); setTimeout(function(){window.location.href='2.php';},0);</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>