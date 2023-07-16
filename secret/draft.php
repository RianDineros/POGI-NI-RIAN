<?php 
    include("database2.php"); 
    include("login2.php")
?> 



<html>
<head>
  <title>Login/Signup Form</title>
  <link rel="stylesheet" type="text/css" href="onelife.css">
</head>
<body>
    
  <div class="container2">
    <h3>SIGN UP </h3>
      <p class ="fillup"> Please Fill up the form</p>
    <form  name="form" action="login2.php" method="POST">
        
      <div class="form-group2">
        <label for="username">First Name:</label>
        <input type="text" id="Fname" name="Fname" placeholder="Enter your First Name" >
      </div>
        
      <div class="form-group2">
        <label for="username"> Last Name:</label>
        <input type="text" id="Lname" name="Lname" placeholder="Enter your Last Name">
      </div>
        
        
        
      <div class="form-group2">
        <label for="username">Username / Email:</label>
        <input type="email" id="username" name="username" placeholder="Enter your username">
      </div>
        
      <div class="form-group2">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
        
        <div class="form-group2">
        <label for="password"> Confirm Password:</label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Enter your password">
      </div>
        
      <div class="form-group2">
         <input class="form-group2" type="submit" id="btn" value="Login" name = "submit1"/>
      </div>
    </form>
  </div>
   
    
    
</body>
</html>