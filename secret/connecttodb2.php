<?php 
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $db_name = "signupdb";  

    $conn = new mysqli($servername,'root','',$db_name, 3308);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
     echo " ";
    ?>