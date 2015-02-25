<?php require("../templates/header.php");?>

<?php 
// set up server and DB
$servername = "localhost";
$username = "root";
$password = "vs";
$db = "inventorytracker";

$foodName = $_GET["foodName"];
$datePurch = $_GET["datePurch"];
$numOfItems = $_GET["numOfItems"];
$Cost = $_GET["Cost"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if(mysqli_connect_error()){
	die("Connection failed: " . mysqli_connect_error(). 
			" (" . mysqli_connect_error() . " )");
}

if($conn === false){
	die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO Inventory (foodname, datepurch, numitems, cost)
				VALUES ('$foodName','$datePurch', '$numOfItems', '$Cost' )";

mysqli_select_db('inventory');

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br />" . mysqli_error($conn);
}
 
?>	

<?php
	
	$sql = "SELECT * FROM inventory";
	$result = mysqli_query($conn,$sql);

?>

<div style="margin: 40px;">
<?php while(	$row = mysqli_fetch_assoc($result)) { ?>
	<p>
	<?= "id: " . $row["id"] . " - Name " . $row["foodname"];?>
	</p><br/>
<?php } ?>
</div>

<?php mysqli_close($conn); ?>
<?php require("../templates/footer.php");?>