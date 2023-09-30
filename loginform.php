<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Services</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/favIcon.png" rel="icon">
    <link href="styles/index1.css" rel="stylesheet">
    
    <script>
        function validateForm(){
            if(document.sform.name.value==""){
                alert("Input your name");
                return false;
            }
            if(document.sform.email.value=="" && document.sform.phone_number.value==""){
                alert("You should submit atleast one of your contact details");
                return false;
            }
            if(document.sform.phone_number.value.length >0 && document.sform.phone_number.value.length < 10  && document.sform.phone_number.value.length > 10){
                alert("Your phone number is invalid,Please check again");
                return false;
            }
            var emailID = document.sform.email.value;
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
                if(emailID.length >0 ){
                    if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter  a valid email ID");
                return false;
            }
                }
           
            if (document.sform.password.value.length < 8) {
            alert("Password must be atleast 8 characters long.");
            return false;
            }
            return true;
    }
    </script>
    <style>
         body::-webkit-scrollbar {
           display: none;
        }

        body {
            background-size: 100%;
        }

        #DashBoardH1 {
            font-style: initial;
            font-variant-caps: small-caps;
            color: white;
            text-shadow: 2px 2px 10px #8BF5FA;
            font-size: 35px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="box-1">
            <div class="content-holder">
                <h2 id="DashBoardH1">Service Desk</h2>
                <p>Easy Way for Get Your Services </p>
                <button class="button-1" onclick="signup()" style="cursor:pointer">Sign up</button>
                <button class="button-2" onclick="login()" style="cursor:pointer">Login</button>
            </div>
        </div>

        
        <!--Forms-->
        <div class="box-2">
            <div class="login-form-container">
                <form action="login.php" method="post">
                <label for="account-type">Account Type:</label>
            <select id="account_type" name="account_type">
                <option value="admin">Admin</option>
                <option value="user">User</option>
      </select><br /><br>
                    <label for="username">Username:</label>
                    <input type="text" name="username" required><br><br>
                    <label for="password">Password:</label>
                    <input type="password" name="password" required><br><br>
                    <input type="submit" value="Login" class="login-button">
                </form>

            </div>


<!--Create Container for Signup form-->
        <div class="signup-form-container">
            <h1 align="center">Registration Form</h1>
<div>
<hr />
<form action="insert.php" name="sform" method="post" onsubmit="return validateForm()">

User Name : <input type="text" name="name"><br />
Email : <input type="text" name="email"><br />
Password : <input type="password" name="password"><br /><br />
Phone Number : <input type="text" name="phone_number"><br /><br />
  
<input  type="submit" name="Insert" class="signup-button"><br />
            <br>
        </div>



        </div>
<script src="libs/jquery-3.6.0.min.js"></script> 
<script>
    function signup()
{
    document.querySelector(".login-form-container").style.cssText = "display: none;";
    document.querySelector(".signup-form-container").style.cssText = "display: block;";
    document.querySelector(".container").style.cssText = "background: linear-gradient(to bottom,  rgb(55, 76, 88),  rgb(28, 139, 106));";
    document.querySelector(".button-1").style.cssText = "display: none";
    document.querySelector(".button-2").style.cssText = "display: block";

};

function login()
{
    document.querySelector(".signup-form-container").style.cssText = "display: none;";
    document.querySelector(".login-form-container").style.cssText = "display: block;";
    document.querySelector(".container").style.cssText = "background: linear-gradient(to bottom, rgb(6, 108, 224),  rgb(14, 48, 122));";
    document.querySelector(".button-2").style.cssText = "display: none";
    document.querySelector(".button-1").style.cssText = "display: block";

}

</script>  
                
</body> 
</html>   