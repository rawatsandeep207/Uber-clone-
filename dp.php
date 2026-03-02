<?php
$servername = "localhost";
$username   = "root";
$password   = "Sandeep@123";
$database   = "uber";   // change to your database name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>