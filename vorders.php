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

$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";

$con = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()){
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully" . "<br \>";"<br \>";

$sql = "SELECT * FROM Orders WHERE user_id IS NOT NULL";

$result = mysqli_query($con, $sql);

echo "<table border='1'>";
  echo "<tr>";
  echo "<th>Order-ID</th>";
  echo "<th>User-ID</th>";
  echo "<th>Service-ID</th>";
  echo "<th>Order-date</th>";
  echo "<th>Order-place</th>";
  echo "<th>Order-time</th>";
  echo "</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['order_id'] . "</td>";
  echo "<td>" . $row['user_id'] . "</td>";
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
    <a href="1.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
 </body>

</html>