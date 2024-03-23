<?php 
    $dbHost = "Localhost";
    $dbUser = "root";
    $dbPassword = "root";
    $dbName = "patopay";


    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conn -> connect_errno) {
    }
?>