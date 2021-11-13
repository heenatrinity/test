<?php
$servername = "127.0.0.1";
$dbusername = "root";
$password = "";
$database = "reg_form";
// Create connection
$conn = new mysqli($servername, $dbusername, $password, $database );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
