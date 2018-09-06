<?php
	if (session_status() == PHP_SESSION_NONE) 
	{
		session_start();
	}
	//if(!$_SESSION["logged_in"])
	//{
		//include 'Dummy.php';
	//}
	//else
	//{
		$conn = mysqli_connect("localhost", "root", "");
		if(!$conn) {
			die("Could not connect: ".mysqli_connect_error());
		}
		
		$db_selected = mysqli_select_db($conn, "shopping");
		if(!$db_selected) {
			echo "Connection to the database failed. <br>";
		}
		
		$userID = $_SESSION["UserID"];
		$addID = $_POST["addID"];
		$stmt = $conn->prepare("INSERT INTO cart (UserID, ItemID) VALUES (?, ?)");
		$stmt->bind_param("ii", $userID, $addID);
		$stmt->execute();
		
		
		include 'Catalog.php';
		echo '<script language="javascript">alert("Item has been added to your cart! Click on your cart to review and checkout");</script>';
	//}
?>