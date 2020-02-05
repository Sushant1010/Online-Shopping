<!--product database connection-->
<?php
	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'product';
	
	//connect to server
	$link = mysqli_connect($dbhost, $username, $password, $dbname);
?>