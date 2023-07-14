<?php 
    $servername = "localhost";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $db_name = "surenadb";  
    $conn = new mysqli($servername,'root','',$db_name, 3308);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
     echo " ";
    ?>