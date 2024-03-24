<?php
$dbHost = "localhost";
$dbUser = "id22002294_root";
$dbPassword = "@Livetreecko3";
$dbName = "id22002294_patopay";

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);


if ($conn->connect_error) {
    header('Location: http://localhost/Patopay/function/');
} else {
}
?>
