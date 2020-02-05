<?php
	include "admindbcon.php";
	if(isset($_POST['submit'])){
		$pmodel = $_POST['pmodel1'];
		$released_date = $_POST['released_date1'];
		$weight = $_POST['weight1'];
		$thickness = $_POST['thickness1'];
		$os_version = $_POST['os_version1'];
		$ram = $_POST['ram1'];
		$rom = $_POST['rom1'];
		$screen = $_POST['screen1'];
		$resolution = $_POST['resolution1'];
		$front_camera = $_POST['front_camera1'];
		$rear_camera = $_POST['rear_camera1'];
		$battery = $_POST['battery1'];

		$query = "INSERT INTO product_specification(pmodel, released_date, weight, thickness, os_version, ram, rom, screen, resolution, front_camera, rear_camera, battery) VALUES('$pmodel','$released_date','$weight','$thickness','$os_version','$ram','$rom','$screen','$resolution','$front_camera','$rear_camera','$battery')";
		$result = mysqli_query($link, $query);
		if($query)
		{
			header('location:productdisplay.php');
		}
		else
		{
			header('location:specification.php');
		}
	}

?>