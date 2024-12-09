<?php
$server = "localhost";
$username = "root";
$password = "";
$databasename = "gad7";

// Establish connection to the MySQL server
$conn = mysqli_connect($server, $username, $password, $databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
