<?php
session_start();

//Establish connection with server and database.
include "EstablishConnection.php";

//Check if user exist.
$_SESSION["email"] = $_POST["username"];

header("Location: http://localhost/notnike/ResetUser2.php");
?>