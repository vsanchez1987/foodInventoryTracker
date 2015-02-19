<?php require("../templates/header.php"); ?>


<div class="container makeCenter">
	<div>
		<h1>This is our inventory tracker </h1>
		<p class="lead">
			We can use this to see what foods we have.
			<br />
		</p>
	</div>
</div>

<form id="formDiv" action="Inventory.php" method="get">
	<div class="form-group form-size" >
		<div>
			<label for="foodName"> Food Name </label>
			<input class="form-control" type="text" name="restName" placeholder="Enter food name"><br />
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
			<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
		</div>
	</div>
</form>


<?php require("../templates/footer.php");?>