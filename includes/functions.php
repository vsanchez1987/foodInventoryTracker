<?php	

function confirm_query($result_set){
	if(!result_set){
		die("Database query failed");
	}
}

function find_all_query(){
	global $conn;

	$query = "SELECT * ";
	$query .= "FROM inventory";
	$result = mysqli_query($conn,$query);
	confirm_query($result);
	return $result;

	}

	function addInventory(){
		global $conn;
		global $foodName;
		global $datePurch;
		global $numOfItems;
		global $Cost;

		$query = "INSERT INTO ";
		$query.= "Inventory (foodname, datepurch, numitems, cost) ";
		$query.= "VALUES ('$foodName','$datePurch', '$numOfItems', '$Cost' )";

		if (mysqli_query($conn, $query)) {
		//	echo "New record created successfully";
		  header('Location: http://localhost:8888/InventoryTracker/public/inventory.php');
		  exit();

		} else {
			echo "Error: " . $query . "<br />" . mysqli_error($conn);
		}

		return $query;
}

?>