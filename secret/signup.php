<?php 
    include ("database.php") ;
 include ("login2.php") ;
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
        <label form="username">First Name:</label>
        <input type="text" name="Fname" placeholder="Enter your First Name" >
      </div>
      
      <div class="form-group2">
        <label form="username"> Last Name:</label>
        <input type="text"  name="Lname" placeholder="Enter your Last Name">
      </div>
        
        
    
      <div class="form-group2">
        <label form="username">Username / Email:</label>
        <input type="email"  name="username" placeholder="Enter your username">
      </div>
        
        
      <div class="form-group2">
        <label form="password">Password:</label>
        <input type="password"  name="password" placeholder="Enter your password">
      </div>
        
        
        <div class="form-group2">
        <label form="password"> Confirm Password:</label>
        <input type="password"  name="cpassword" placeholder="Enter your password">
      </div>
        
      <div class="form-group2">
         <input class="form-group2" type="submit" id="btn" value="Login" name = "submit1"/>
      </div>
        
    </form>
      
  </div>
   
    
    
</body>
</html>