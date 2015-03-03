<?php require("../templates/header.php");?>
<?php require("../includes/db_connect.php");?>
<?php require("../includes/functions.php"); ?>

<?php 

// $foodName = mysqli_real_escape_string($conn, $_GET["foodName"]);
// $datePurch = mysqli_real_escape_string($conn, $_GET["datePurch"]);
// $numOfItems = mysqli_real_escape_string($conn, $_GET["numOfItems"]);
// $Cost = mysqli_real_escape_string($conn, $_GET["Cost"]);

	// Perform database query
	$result = find_all_query();

 ?>



<?php while(	$row = mysqli_fetch_assoc($result) ) { ?>

	<div style="margin: 10px; float: left;" class="list-group  panel panel-info">
		<div class="panel panel-heading">
			<h4 class="panel-title"><?= $row["foodname"];?></h4>
		</div>
		<span class="list-group-item-text">
		<?= "Date Purchased: " . $row["datepurch"];?>
		</span><br />
		<span class="list-group-item-text">
		<?= "Number of Items: " . $row["numitems"];?>
		</span><br/>
		<span class="list-group-item-text">
		<?= "Cost of items: " . "$". $row["cost"];?>
		</span>
		<br />
		<br />
		<button class="btn btn-primary btn-xs  give-space" type="submit" href="http://www.google.com">Delete</button>
	</div>

<?php } ?>

<?php mysqli_close($conn); ?>
<?php require("../templates/footer.php");?>