<!--connect to admin database-->
<?php
	$currency = 'Rs. ';

	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'admin';
	
	//connect to server
	$link = mysqli_connect($dbhost, $username, $password, $dbname);
?>