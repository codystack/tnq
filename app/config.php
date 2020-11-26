<?php
$servername = "localhost";
$username = "webify";
$password = "Webify2020!!";
$dbname = "pageantry_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Database Connected successfully";
?>