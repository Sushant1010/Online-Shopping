<!--Data entry page-->
<!-- <?php
	// include "admindbcon.php";
	// session_start();

	// if(!isset($_SESSION['ID']))
	// {
	// 	header('location:index.php');
	// }
?> -->

<!--data upload to product database process-->
<?php

	$msg = "";

	if(isset($_POST['upload']))
	{
		$db = mysqli_connect("localhost","root","","admin");
		
		$pname = $_POST['pname'];
		$price = $_POST['price'];
		$model = $_POST['model'];
		$descr = $_POST['descr'];
		$quantity = $_POST['qua'];
		$image = $_FILES['image']['name'];
		$image_temp = $_FILES['image']['tmp_name'];
		$ext = pathinfo($image,PATHINFO_EXTENSION);
		$image = md5($image);
		$image = $image . "." . $ext;
		$target = "image/".$image;
		$sql = "INSERT INTO prod(pname, price, model, descr, quantity, image) VALUES('$pname','$price','$model','$descr', '$quantity','$image')";

		mysqli_query($db, $sql);

		if(move_uploaded_file($image_temp,$target))
		{
			$msg ="Image uploaded successfully";
		}
		else
		{
			$msg = "There was a problem uploading image";
		}
	}

?>
<html>
<head>
<title>Admin Page | Insert Specification</title>
<link rel="shortcut icon" href="logo/favicon1.ico">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body style="background-color: rgba(177,177,177,1.00)">
	<?php include "header.php" ?>
	<div id="adminHome">
		<div class="logHome panel panel-default panel-body">
		<form method="POST" action="productdisplay.php" enctype="multipart/form-data">
			<h1 class="text-success">Specification</h1>
		 	<input type="text" class="form-control" name="pmodel1" value="<?php echo $model ?>" readonly>
		 		
			<label for="id">Released Date</label><input type="text" class="form-control" name="released_date1" required>
			<label for="id">Weight</label><input type="text" class="form-control" name="weight1" required>
			<label for="id">Thickness</label><input type="text" class="form-control" name="thickness1" required>
			<label for="id">OS Version</label><input type="text" class="form-control" name="os_version1" required>
			<label for="id">RAM</label><input type="text" class="form-control" name="ram1" required>
			<label for="id">ROM</label><input type="text" class="form-control" name="rom1" required>
			<label for="id">Screen Size</label><input type="text" class="form-control" name="screen1" required>
			<label for="id">Screen Resolution</label><input type="text" class="form-control" name="resolution1" required>
			<label for="id">Front Camera</label><input type="text" class="form-control" name="front_camera1" required>
			<label for="id">Rear Camera</label><input type="text" class="form-control" name="rear_camera1" required>	
			<label for="id">Battery</label><input type="text" class="form-control" name="battery1" required>

			<input type="submit" name="submit" value="Insert">
				<a href="productdisplay.php"><button type="button" class="btn btn-primary">SEE TABLE</button></a>
			
		</form>		
		</div>
	</div>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
