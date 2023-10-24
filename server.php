<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";
    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Lost Connetion". mysqli_connect_error());
    }
    
?>

