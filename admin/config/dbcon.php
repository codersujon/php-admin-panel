<?php 
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname =  "admin_panel";

    //Connection
    $con =  mysqli_connect("$host", "$username", "$password", "$dbname");

    if(!$con){
        header("Location: ../errors/db.php");
        die(mysqli_connect_error($con));
    }
?>