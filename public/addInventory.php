<?php require("../includes/db_connect.php");?>
<?php require("../includes/functions.php"); ?>

<?php

$foodName = mysqli_real_escape_string($conn, $_GET["foodName"]);
$datePurch = mysqli_real_escape_string($conn, $_GET["datePurch"]);
$numOfItems = mysqli_real_escape_string($conn, $_GET["numOfItems"]);
$Cost = mysqli_real_escape_string($conn, $_GET["Cost"]);

 	
 addInventory();
 // header('Location: http://localhost:8888/InventoryTracker/Inventory.php');
 // die();
?>


<?php mysqli_close($conn); ?>
