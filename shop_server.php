<?php 
    // session_start();
    $base_url = 'http://localhost/register';
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopping";
    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Lost Connetion". mysqli_connect_error());
    }
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
