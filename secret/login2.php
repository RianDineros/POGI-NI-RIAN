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
    $sql = "INSERT INTO tangina (Fname, Lname, username, password, cpassword) VALUES ('$Fname', '$Lname', '$username', '$password', '$cpassword')";
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





