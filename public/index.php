<?php require("../templates/header.php"); ?>

<script src="https://code.jquery.com/jquery-1.11.1.js"></script>


<?php 

// $foodName = mysqli_real_escape_string($conn, $_GET["foodName"]);
// $datePurch = mysqli_real_escape_string($conn, $_GET["datePurch"]);
// $numOfItems = mysqli_real_escape_string($conn, $_GET["numOfItems"]);
// $Cost = mysqli_real_escape_string($conn, $_GET["Cost"]);


?>

<!-- <script type="text/javascript">
	
// 	$("#inventory").click(function(){
// 			window.location = "inventory.php";
// 	});

// </script> -->

<div class="container">
	<div class="text-center makeCenter">
		<h1>This is our inventory tracker </h1>
		<p class="lead">
			We can use this to see what foods we have.
			<br />
		</p>
	</div>
</div>

<form action="addInventory.php" method="get">
  <div class="container">
   <div class="form-div">
		<div>
				<div>
					<label for="foodName"> Food Name </label>
					<input class="form-control" type="text" name="foodName" placeholder="Enter food name"><br />
				</div>
				<div>
					<label for="datePurch">Date Purchased</label>
					<input class="form-control" type="text" name="datePurch" placeholder="When was it purchased"><br />
				</div>
				<div>
					<label for="numOfItems">How many did we buy </label>
					<input class="form-control" type="text" name="numOfItems" placeholder="Number of items"><br />
				</div>
				<div>
					<label for="Cost">How much did it cost </label>
					<input class="form-control" type="text" name="Cost" placeholder="Cost?"> <br />
				</div>
				<div>
					<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" id="inventory">
			 </div>
			</div>
		</div>
	</div>
</form>


<?php require("../templates/footer.php");?>