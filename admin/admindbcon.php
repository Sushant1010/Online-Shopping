<!--connect to admin database-->
<?php
	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'admin';
	
	//connect to server
	$link = mysqli_connect($dbhost, $username, $password, $dbname);
?>