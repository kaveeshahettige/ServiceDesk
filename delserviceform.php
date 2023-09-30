

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
    visibility: hidden;
      }
      
</style>
   </head>
<body>
  <div class="container">
    <div class="title">Delete service</div>
    <div class="content">
    <form action="delservice.php" method="post">
        <label for="ID">service ID:</label>
        <input type="text" name="service_id"><br><br>

        <input type="submit" value="Delete">
    </form>
    </div>
  </div>


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

$sql = "SELECT * FROM Services";

$result = mysqli_query($con, $sql);

echo "<table border='1'>";
  echo "<tr>";
  echo "<th>Service-ID</th>";
  echo "<th>Service-Name</th>";
  echo "<th>Service-Description</th>";
  echo "<th>Service-Price</th>";
  
  echo "</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['service_id'] . "</td>";
  echo "<td>" . $row['service_name'] . "</td>";
  echo "<td>" . $row['service_description'] . "</td>";
 echo "<td>" . $row['service_price'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);

?>
<div id="arrow">
    <a href="1.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
</body>
</html>