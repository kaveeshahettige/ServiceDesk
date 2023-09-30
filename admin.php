<?php

?>

<html>
<head>
<title>OSMS</title>
<link rel="stylesheet" href="">
</head>
<body>
    <?php
    session_start();
    $username=$_SESSION['username'];
    echo "$username";
    ?>
    <div>
<p align="center">ADMIN PAGE</p>
<img id="i1" src="" alt=""><br />

<a href="Adupdateform.php">Edit Your Profile</a><br />
<a href="serviceform.php">Request a Service</a><br>
<a href="logout.php">LogOut</a><br>



    </div>
</body>
<html>