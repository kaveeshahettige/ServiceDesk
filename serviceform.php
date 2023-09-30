
<html>
<head>
    <?php
session_start();
    ?>
<link rel="stylesheet" href="new1.css">
<style>
      #arrow{
        position: absolute;
    right: 10px;
    bottom: 19px;
    font-size: 24px;
    visibility: hidden;
      }
      
#form1{
   position:relative;
   left:750px; 
   font-size:30px;
   
   background:black;
   color:white;
}

</style>
</head>
<body style="background-color:powderblue">
<div>
<br />
<section class="container-fluid" id="serviceContent">
    <div class="serviceThumbnail">
        <h1 class="serviceTittle  text-white">Our Services</h1>
    </div>
    <hr />
    <div class="row justify-content-center" id="serviceInfoTitle">
        <div class="col">
            
        </div>
    </div>
    <div class="row" id="serviceInfoDiv">
        <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <div class="divIcon" id="divIcon1"></div>
                </div>
                <div class="text w-100">
                    <h3 class="heading mb-2">Cleaning</h3>
                    <p class="lh-lg descrip">The services may include regular cleaning, deep cleaning, move-in or move-out cleaning, post-construction cleaning, and more. The website may also offer online booking and payment options for customer convenience. A cleaning service aims to provide high-quality cleaning services that are reliable,
                         efficient, and tailored to the specific needs of each customer. <br></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <div class="divIcon" id="divIcon2"></div>
                </div>
                <div class="text w-100">
                    <h3 class="heading mb-2">Garden Decoration</h3>
                    <p class="lh-lg descrip ">
                    This provides types of garden decoration services offered, such as landscape design, hardscaping, garden maintenance, and seasonal decorations. The services may include planting trees, flowers, and shrubs, building paths, patios, and decks, installing water features, and outdoor lighting. The website may also offer online consultation and design services for customers who want to customize their outdoor spaces. A garden decoration service  aims to provide creative and sustainable solutions that transform outdoor spaces into beautiful and functional areas that reflect the customer's style and personality.
                    <br></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <div class="divIcon" id="divIcon3"></div>
                </div>
                <div class="text w-100">
                    <h3 class="heading mb-2">Food Delivery</h3>
                    <p class="lh-lg descrip">
                    A food delivery service provides customers with the convenience of food delivered to their doorstep. Customers can place their orders online, pay electronically, and track the status of their delivery in real-time. The food delivery service may offer various delivery options, such as standard delivery, express delivery, or scheduled delivery. A food delivery service website aims to provide a seamless and enjoyable experience for customers by delivering high-quality food that is fresh, hot, and delicious, on time, and at a reasonable price.
                    <br></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <div class="divIcon" id="divIcon4">

                    </div>
                </div>
                <div class="text w-100">
                    <h3 class="heading mb-2">House Maintaining</h3>
                    <p class="lh-lg descrip">
                    A house maintaining service offers professional cleaning and maintenance services for homes. The services may also include maintenance tasks such as plumbing, electrical, and HVAC repairs, lawn care, and pest control. The website may also offer online booking, scheduling, and payment options for customer convenience. A house maintaining service website aims to provide high-quality and reliable services that help homeowners maintain their homes in optimal condition, save time and effort, and ensure a comfortable and healthy living environment for their families.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<br />
<div id="form1">

</div>
</div>

</body>

</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Service Request Form</div>
    <div class="content">
        
    <form action="order.php" method="post" >     
<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "sample");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from database
$sql = "SELECT service_id, service_name FROM Services";
$result = mysqli_query($conn, $sql);

// Generate select options
$options = "";
while ($row = mysqli_fetch_assoc($result)) {
    $options .= "<option value='".$row['service_id']."'>".$row['service_name']."</option>";
}

// Close database connection
mysqli_close($conn);
?>

<!-- Include select options in form -->
    <select name="service_id">
        <?php echo $options; ?>
    </select>



<br>

        <label for="date">Date:</label>
        <input type="date" name="order_date" required><br><br>
        <label for="place">Place</label>
        <input type="text" name="order_place" required><br><br>
        <label for="time">Time</label>
        <input type="time" name="order_time" required><br><br>

        <input type="submit" value="Submit">
    </form>
      
    </div>
  </div>
  <div id="arrow">
    <a href="2.php"><img width="100px" height="100px" alt="top image" src="assets/arrow.png"></a>
</div>
</body>
</html>

