<?php
	include "connect.php";
	if(isset($_POST['buy']))
	{
		$name = $_POST['name'];
		$item = $_POST['quantity[]'];

		$query = "INSERT INTO order(productName,totalOrder) values('$name','$item')";
	}
	echo "Inserted";
?>