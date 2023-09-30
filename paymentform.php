<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="styles/style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
    <body>

    <div class="container">
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
      
      session_start();
      $username=$_SESSION['username'];
      $service_id=$_SESSION['service_id'];
      echo "$username <br />";
      echo "$service_id <br />";
              //
      
      $sql = "SELECT service_price FROM Services WHERE service_id = '$service_id'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $service_price = $row["service_price"];
      } else {
        
      }
      echo "You have to pay $service_price";
      
      
      //
      
              ?><br /><br />
    <div class="title">Payment</div>
    <div class="content">
              <form action="payment.php" method="post">
      
      
              <label for="payment_date">Date:</label>
                <input type="date" name="payment_date" required><br><br>
                <label for="payment_date">Amount you pay:</label>
                <input type="text" name="payment_amount" required><br><br>
                
                <input type="submit" value="Pay">
              </form>
    </div>
  </div>
        
       
    
    </body>
</html>
