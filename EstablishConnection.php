<?php
//Establish a connection with the server, "localhost".
$server   = "localhost";
$admin    = "root";
$key      = "";
$database = "notnike";
$conn     = new mysqli($server, $admin, $key, $database);

if ($conn->connect_errno)
  echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_errno;
?>