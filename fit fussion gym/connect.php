<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "fitness_fusion";


$conn = mysqli_connect($server, $user, $pass, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
