<?php
$servername = "localhost";
$username = "root";
$password = "8086";
$dbname = "lb";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
?>