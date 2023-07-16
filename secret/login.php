<?php
include('connecttodb.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escape user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Insert the data into the table
    $sql = "INSERT INTO legit (username, password) VALUES ('$username', '$password')";
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


