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
//include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $type=$_POST['account_type'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Retrieve the user's password hash from the database
  $sql = "SELECT * FROM Users WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $password_hash = $row['password'];
    $role = $row['role'];

    // Verify the submitted password against the hash
    if (($role =='1') && ($password == $password_hash) && ($type =='admin')) {
      session_start();
      $_SESSION['username'] = $username;
      header('Location: 1.php');
    } else if (($role =='') && ($password == $password_hash)  && ($type =='user')) {
      session_start();
      $_SESSION['username'] = $username;
      header('Location: 2.php');
    }else {
    echo "<script>alert('Incorrect username or password'); setTimeout(function(){window.location.href='loginform.php';}, 0);</script>";
  }
}

}

?>


