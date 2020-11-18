<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  session_start();
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>