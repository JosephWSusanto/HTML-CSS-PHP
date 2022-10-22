<?php
/*
server: localhost
username:josr4465_test
pwd: 6FpBgNN3mwCzwTT
database:josr4465_test
*/
$servername = "localhost";
$username = "josr4465_test";
$password = "6FpBgNN3mwCzwTT";
$dbname = "josr4465_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>