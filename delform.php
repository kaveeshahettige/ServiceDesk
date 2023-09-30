

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
    <div class="title">Deletion</div>
    <div class="content">
    <form action="delete.php" method="post">
        <label for="ID">ID:</label>
        <input type="text" name="user_id"><br><br>

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

$sql = "SELECT * FROM Users";

$result = mysqli_query($con, $sql);

echo "<table border='1'>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Name</th>";
  echo "<th>Email</th>";
  echo "<th>Password</th>";
echo "<th>Phone Number</th>";
  echo "</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['user_id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['phone_number'] . "</td>";
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


