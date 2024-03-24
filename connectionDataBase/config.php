<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "root";
$dbName = "patopay";

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);


if ($conn->connect_error) {
    header('Location: http://localhost/Patopay/function/');
} else {
}
?>
