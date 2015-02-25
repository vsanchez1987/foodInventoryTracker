<?php require("../templates/header.php");?>

<?php 
// set up server and DB
$servername = "localhost";
$username = "root";
$password = "vs";
$db = "inventorytracker";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn -> connect_error){
	die("Connection failed: " . $conn -> connect_error);
}
 
?>	

<p style="margin-top: 60px;"> <?= $_GET["foodName"]; ?> </p>
<p style="margin-top: 5px;"> <?= $_GET["datePurch"]; ?> </p>
<p style="margin-top: 5px;"> <?= $_GET["numOfItems"]; ?> </p>
<p style="margin-top: 5px;"> <?= "$" . $_GET["Cost"]; ?> </p>




<?php $conn->close(); ?>
<?php require("../templates/footer.php");?>