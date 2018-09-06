<?php
	$conn = mysqli_connect("localhost", "root", "");
	if(!$conn) {
		die("Could not connect: ".mysqli_connect_error());
	}
	
	$db_selected = mysqli_select_db($conn, "shopping");
	if(!$db_selected) {
		echo "Connection to the database failed. <br>";
	}
	
	
	$sql = "SELECT * FROM cart WHERE UserID=1";
	$result = mysqli_query($conn, $sql);
	if($result->num_rows > 0)
	{
		$totalPrice=0;
		while ($row = mysqli_fetch_array($result))
		{
			$itemID = $row["ItemID"];
			$sql = "SELECT items.Item_Name, items.Item_Price, CartID FROM cart, items WHERE items.ItemID=".$itemID."";
			$query = mysqli_query($conn, $sql);
			$value = mysqli_fetch_object($query);
			$cartID = $value->CartID;
			$itemName = $value->Item_Name;
			$itemPrice = $value->Item_Price;
			echo '<div class="row" style="padding:15px; border-bottom: 1px solid lightgray">	<!-- ROW -->
					<div class="col-md-8">	<!-- Image & Info (column)-->
						<div style="width:20%; height:150px; background-color: white; float:left; padding:10px">	<!-- Image-->
							<img src="shoe.jpg" class="img-fluid">
						</div>
						<div style="float:left; width:80%; height:90%">	<!-- Info-->
							<div style="position:relative;width:100%;height:90%;font-weight:bold; color:#3366BB; background-color:white;font-size: 25px">	<!-- Words -->
								<span style="vertical-align:middle">'.$itemName.'</span>
							</div>
							<div style="position:relative; width:100%;height:20%">	<!-- Actions (span)-->
								<button class="btn" onclick="" style="color:#3366BB; " id="'.$cartID.'">Delete</button>	<!-- delete function-->
							</div>
						</div>
					</div>
					<div class="col-md-3">	<!-- Price -->
						<span>RM'.$itemPrice.'</span>
					</div>
					<div class="col-md-1" style="text-align:center">	<!-- ROW -->
						<span>1</span>
					</div>
				</div>';
			$totalPrice = $totalPrice + $itemPrice;
		}
		echo '<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-3">
					<span style="font-weight:bold">RM'.$totalPrice.'<span>
				</div>
			</div>';
		
	}
	else
	{
		echo '<h2>Oooops, your cart is empty! Go add some feet gloves in here!<h2>';
	}

?>