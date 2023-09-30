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
$id = $_POST['user_id'];

// Construct the SQL query to delete the record
$sql = "DELETE FROM  Users WHERE user_id='$id'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Customer Deletion Successful.'); setTimeout(function(){window.location.href='1.php';}, 0);</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>