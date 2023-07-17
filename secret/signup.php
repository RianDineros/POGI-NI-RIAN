<?php
include('connecttodb2.php');

if (isset($_POST['submit1'])) {
    $Fname1 = $_POST["Fname"];
    $Lname1 = $_POST["Lname"];
    $username1 = $_POST["username"];
    $password1 = $_POST["password"];
    $cpassword1 = $_POST["cpassword"];

    // Escape user input to prevent SQL injection
    $Fname = mysqli_real_escape_string($conn, $Fname1);
    $Lname = mysqli_real_escape_string($conn, $Lname1);
    $cpassword = mysqli_real_escape_string($conn, $cpassword1);
    $username = mysqli_real_escape_string($conn, $username1);
    $password = mysqli_real_escape_string($conn, $password1);

    // Insert the data into the table
    $sql = "INSERT INTO signupdb (Fname, Lname, username, password, cpassword) VALUES ('$Fname', '$Lname', '$username', '$password', '$cpassword')";
    $result1 = mysqli_query($conn, $sql);


    if ($result1) {
        // Data inserted successfully
        echo "Data inserted successfully.";
        header("Location: rian.html");
        exit;
    } else {
        // Error inserting data
        echo "Error: " . mysqli_error($conn);
        exit;
    }
}

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
    <form  name="form" action="" method="POST">
        
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