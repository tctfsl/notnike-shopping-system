<?php
	$conn = mysqli_connect("localhost", "root", "");
	if(!$conn) {
		die("Could not connect: ".mysqli_connect_error());
	}
	
	$db_selected = mysqli_select_db($conn, "shopping");
	if(!$db_selected) {
		echo "Connection to the database failed. <br>";
	}
	
	$deleteID = filter_var($_POST["deleteID"], FILTER_SANITIZE_NUMBER_INT);
	$stmt = $conn->prepare("DELETE FROM cart WHERE CartID=?");
	$stmt->bind_param("i", $deleteID);
	$stmt->execute();
	
	include 'Cart.php';
	
?>