<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blackhorse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  echo "vayena vai";
  // die("Connection failed: " . mysqli_connect_error());
}
?>

