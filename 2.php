<html>
<head>
<script>
    // Disable back and forward buttons in the browser
    window.location.hash = "no-back-button";
    window.location.hash = "Again-No-back-button"; // This is necessary to work in Chrome
    window.onhashchange = function () {
        window.location.hash = "no-back-button";
    }
</script>
<title>OSMS</title>
<link href="assets/favIcon.png" rel="icon"> 
    <meta content="width=device-width initial-scale=1" name="viewport">
    <link href="styles/customer1.css" rel="stylesheet">
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
            /* color: white; */
  /* text-shadow: 2px 2px 4px red; */
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
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header('Location: 2.php'); // Redirect to the dashboard or home page
        exit;
    }
    echo "<h2><b>$username</b></h2>";
    ?>  
            <article>
            <a href="updateform.php">Edit Profile</a>
            <a href="serviceform.php">Services</a>
             <a href="myorders.php">My Orders</a>
             <a href="delorderform.php">Delete Orders</a>
            <a href="LogOut.php">LogOut</a>

            </article>

        </nav>
    
    </header>
    

<main>
    <section id="content">

        <div>
            <h1><span id="span1">Welcome to,<br>
                our</span> <span id="span2">Service Desk</span></h1>
        </div>

        <div>
            <h1>We provide Services<span id="span3"></span></h1>
        </div>
    </section>
    </main>

    
    </script>
    
</body>
<html>
