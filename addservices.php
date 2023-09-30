<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
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
    <div class="title">Add Service</div>
    <div class="content">
    <form action="adds.php" method="post" >

Service Name : <input type="text" name="service_name"><br />
Service Description : <input type="text" name="service_description"><br />
Service Price : <input type="text" name="service_price"><br />
  
<input  type="submit" name="Insert"><br />
<hr />  

</form>
    </div>
  </div>
  <div id="arrow">
    <a href="1.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
</body>
</html>



