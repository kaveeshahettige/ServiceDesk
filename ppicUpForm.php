<?php
session_start();
 
// Check if user is logged in as the user profile picture can only be updated by the logged in user
if(!isset($_SESSION['username'])){
  header("Location: loginform.php");
}
 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
// Check if the form has been submitted
if(isset($_POST['submit'])){
 
  $file = $_FILES['profile_pic'];
 
  // Get the file name, size, type, and error
  $file_name = $file['name'];
  $file_size = $file['size'];
  $file_type = $file['type'];
  $file_error = $file['error'];
 
  // Check if the file is an image
  $file_ext = strtolower(end(explode('.', $file_name)));
  $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
  if(in_array($file_ext, $allowed_ext)){
    // Check if the file size is less than 5MB
    if($file_size < 5000000){
 
      // Generate a random file name to avoid overwriting existing files
      $new_file_name = uniqid('', true) . "." . $file_ext;
 
      // Set the file path to the profile_pictures directory
      $file_path = "profile_pictures/" . $new_file_name;
 
      // Upload the file to the server
      if(move_uploaded_file($file['tmp_name'], $file_path)){
 
        // Update the user's profile picture in the database
        $username = $_SESSION['username'];    
        //
        
        $sql = "SELECT user_id FROM Users WHERE username = '$username'";
        $result = $conn->query($sql);
        echo "$uder_id";
        
        if ($result->num_rows > 0) {
          // User found, get the user_id
          $row = $result->fetch_assoc();
          $user_id = $row["user_id"];
        } else {
          // User not found
        }
        //
        $sql = "UPDATE PPictures SET picture='$new_file_name' WHERE user_id='$user_id'";
        if(mysqli_query($conn, $sql)){
          // Redirect the user to their profile page
          header("Location: 2.php");
          exit();
        } else {
          echo "Error: " . mysqli_error($conn);
        }
 
      } else {
        echo "Error uploading file.";
      }
 
    } else {
      echo "File size must be less than 5MB.";
    }
  } else {
    echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
  }
 
}
 
mysqli_close($conn);
 
?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Update Profile Picture</title>
</head>
<body>
 
  <h1>Update Profile Picture</h1>
 
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
 
    <label for="profile_pic">Choose a file:</label>
    <input type="file" name="profile_pic" id="profile_pic">
 
    <br>
 
    <input type="submit" name="submit" value="Update">
 
  </form>
 
</body>
</html>
