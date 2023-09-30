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


//session_start();
//$username=$_SESSION['username'];
//echo "$username";

//

/*$sql = "SELECT user_id FROM Users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // User found, get the user_id
  $row = $result->fetch_assoc();
  $user_id = $row["user_id"];
} else {
  // User not found
}
echo "$user_id";*/
//
$user_id = $_POST['user_id'];
$new_username = $_POST['n_username'];
$new_email = $_POST['email'];
$new_password = $_POST['password'];
$new_phone_number = $_POST['phone_number'];

// Sanitize user input to prevent SQL injection attacks
//$new_userid = mysqli_real_escape_string($conn, $new_userid);
$new_username = mysqli_real_escape_string($conn, $new_username);
$new_password = mysqli_real_escape_string($conn, $new_password);
$new_email = mysqli_real_escape_string($conn, $new_email);
$new_phone_number = mysqli_real_escape_string($conn, $new_phone_number);

// Hash password using a secure algorithm (e.g. bcrypt or Argon2)
//$new_password = password_hash($new_password, PASSWORD_DEFAULT);

// Update user information in the database
$sql = "UPDATE Users SET  username='$new_username', email='$new_email', password='$new_password', phone_number='$new_phone_number' WHERE user_id=$user_id";
if ($conn->query($sql) === TRUE) {
    // User information updated successfully
    $_SESSION['username'] = $new_username;
    //echo "User information updated successfully";
// Show an alert message and redirect the user to the main page after 3 seconds
echo "<script>alert('User information updated successfully.'); setTimeout(function(){window.location.href='1.php';}, 0);</script>";


//

} else {
    echo "Error updating user information: " . $conn->error;
}

$conn->close();
?>
