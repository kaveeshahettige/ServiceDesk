
<html>
<head>
<title>OSMS</title>
<link href="assets/favIcon.png" rel="icon"> 
    <meta content="width=device-width initial-scale=1" name="viewport">
    <link href="styles/admin.css" rel="stylesheet">
    <style>
         body::-webkit-scrollbar {
           display: none;
        }

        body {
            background-size: 100%;
            top:-7px;
        }
        h2{
            position: relative;
            left:10px;
            top:15px;
            /* color:#DC143C; */
            text-shadow: 2px 2px #57C5B6;
            font-size:35px;
        }
    
        #content{
            position:relative;
            top:0px;
            width:100%;
            height:720px;
        }

        
    </style>
</head>
<body>
      
    
    <header >
    
        <nav>
        <?php
    session_start();
    $username=$_SESSION['username'];
    echo "<h2><b>$username</b></h2>";
    ?>  
            <article>
             <a href="view.php">View Customer DataBase</a>
            <a href="addservices.php">Add a Service</a>
            <a href="editservicesform.php">Edit Current services</a>
            <a href="delserviceform.php">Delete a Service</a>
            <a href="viewservices.php">View Current services</a>
            <a href="adUpdateform.php">Edit Customer Details</a>
            <a href="delform.php">Delete Customers</a>
            <a href="vorders.php">Orders</a>
            <a href="vpayments.php">Payments</a>
            <a href="logout.php">LogOut</a>

            </article>

        </nav>
    
    </header>
    

<main>
    <section id="content">

        <div>
            <h1><span id="span1">Service Desk<br>
                our</span> <span id="span2">Admin Page</span></h1>
        </div>

        <div>
            <h1>&nbsp; We provide Servicesv<span id="span3"></span></h1>
        </div>
    </section>
    </main>

    
    
</body>
<html>





