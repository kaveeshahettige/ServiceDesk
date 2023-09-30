

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      #arrow{
        position: absolute;
    right: 10px;
    bottom: 19px;
    font-size: 24px;
    visibility:�hidden;
      }
      
</style>
   </head>
<body>
  <div class="container">
    <div class="title">Delete Orders</div>
    <div class="content">
    <form action="delorder.php" method="post">
        <label for="ID">Order ID:</label>
        <input type="text" name="order_id"><br><br>

        <input type="submit" value="Delete">
    </form>
    </div>
  </div>


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

$sql = "SELECT * FROM Orders where user_id='$user_id'";

$result = mysqli_query($con, $sql);

echo "<table border='1'>";
  echo "<tr>";
  echo "<th>Order-ID</th>";
  echo "<th>Service-ID</th>";
  echo "<th>Order-date</th>";
  echo "<th>Order-place</th>";
  echo "<th>Order-time</th>";
  
  
  echo "</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['order_id'] . "</td>";
  echo "<td>" . $row['service_id'] . "</td>";
  echo "<td>" . $row['order_date'] . "</td>";
  echo "<td>" . $row['order_place'] . "</td>";
  echo "<td>" . $row['order_time'] . "</td>";
  echo "</tr>";
}

mysqli_close($con);

?>
<div id="arrow">
    <a href="2.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
</body>
</html>