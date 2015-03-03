<?php 
// set up server and DB
// $servername = "localhost";
// $username = "root";
// $password = "vs";
// $db = "inventorytracker";

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "vs");
define("DB_DATABASE", "inventorytracker");


// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

// Check connection
if(mysqli_connect_error()){
	die("Connection failed: " . mysqli_connect_error(). 
			" (" . mysqli_connect_error() . " )" );
}

?>