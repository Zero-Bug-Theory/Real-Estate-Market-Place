<?php

// Setting up Variables..
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "essence";

// Create connection..
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection..
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
// else {
//     echo "Connection Successful";
// }