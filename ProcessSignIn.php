<?php
session_start();

//Get input username and password from user-sign-in.html.
//Reminder: username and password are strings.
$username = $_POST["username"];
$userpassword = $_POST["userpassword"];

//Establish connection with server and database.
include "EstablishConnection.php";

if (!($sqlstmt = $conn->prepare("SELECT email, password FROM customer WHERE email = ?"))) {
  echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

if (!($sqlstmt->bind_param("i", $username))) {
  echo "Binding parameters failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error;
}

if (!($sqlstmt->execute())) {
  echo "Execute failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error; 
}

if (!($result = $sqlstmt->get_result())) {
  echo "Getting result failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error;
}

if ($row = $result->fetch_assoc()) {
  if ($row["password"] == $userpassword) {
    $_SESSION["username"] = $row["email"];
    header("Location: http://localhost/notnike/");
  }
  else
    header("Location: http://localhost/notnike/");
}
else
  header("Location: http://localhost/notnike/");
?>