<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>