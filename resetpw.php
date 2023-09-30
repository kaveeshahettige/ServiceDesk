<?php 

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Get email from form submission
$email = $_POST['email'];

// Check if email exists in database
$sql = "SELECT user_id FROM Users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
	// Generate unique token and store in database
	$user_id = $result->fetch_assoc()['user_id'];
	$token = bin2hex(random_bytes(16));
	$expiration = time() + (60 * 60); // Token is valid for 1 hour
	$sql = "INSERT INTO password_resets (user_id, token, expiration) VALUES ('$user_id', '$token', '$expiration')";
	$conn->query($sql);

	// Send email to user with password reset link
	$reset_url = "http://example.com/reset_password.php?token=$token";
	$message = "Click the following link to reset your password: $reset_url";
	mail($email, "Password Reset Request", $message);

	// Display success message
	echo "An email has been sent to your email address with instructions on how to reset your password.";
} else {
	// Display error message
	echo "No account found with that email address.";
}

$conn->close();

?>
