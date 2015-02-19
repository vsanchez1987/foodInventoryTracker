<?php require("../templates/header.php"); ?>


<div class="container">
	<div class="makeCenter">
		<h1>Welcome to resturant finder </h1>
		<p class="lead">
			Use the form below to find the resturnant you want to find.
			<br />
			This will also expand to finding food trucks.
		</p>
	</div>
</div>

<form class="form-inline" method="get">
	<div class="form-group" id="formDiv">
		<label for="restName"> Resturant Name </label>
		<input class="form-control" type="text" placeholder="Enter resturant name you want ot look for">
		<input class="btn btn-default" type="submit" value="Search">
	</div>
</form>






<?php require("../templates/footer.php");?>