<?php
include('connecttodb.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escape user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Insert the data into the table
    $sql = "INSERT INTO logindb (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
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
    
  <div class="container">
    <h2>Login</h2>
    <form name="form" action="" method="POST">
        
      <div class="form-group">
        <label form="username">Username:</label>
        <input type="email" name="username" placeholder=" Enter your username">
      </div>
        
        <p class="example">example:onelife@gmail.com</p>
        
      <div class="form-group">
        <label form="password">Password:</label>
        <input type="password"  name="password"  accept="text/plain" placeholder="Enter your password">
      </div>
        
      <div class="form-group">
         <input class="form-group" type="submit" id="btn" value="Login" name = "submit"/>
      </div>
        
    </form>
    </div>
    
      <p class="signup">Don't have an account? <a href="signup.php">Sign up</a></p>
    
    
</body>
</html>