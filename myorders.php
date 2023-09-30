
<html>
  <head>
    <style>
      body{
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

      #arrow{
        position: absolute;
    right: 10px;
    bottom: 19px;
    font-size: 24px;
    visibility: hidden;
      }
      
    </style>
  </head>
  <body>
    <div align="center">
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
//echo "Connected successfully" . "<br \>";"<br \>";
$username=$_SESSION['username'];

//
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
  echo "<th>service-ID</th>";
echo "<th>Order-Date</th>";
echo "<th>Order-Place</th>";
echo "<th>Order-Time</th>";
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

echo "</table>";

mysqli_close($con);

?>
    </div>
    <div id="arrow">
    <a href="2.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
  </body>

</html>