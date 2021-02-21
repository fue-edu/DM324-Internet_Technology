<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "it_summer_2020_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>