<!--Data entry page-->
<?php
	include "admindbcon.php";
	session_start();

	if(!isset($_SESSION['ID']))
	{
		header('location:index.php');
	}
?>

<html>
<head>
<title>Admin Page | Insert Product Item</title>
<link rel="shortcut icon" href="logo/favicon1.ico">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body style="background-color: rgba(177,177,177,1.00)">
	<?php include "header.php" ?>
	<div id="adminHome">
		<div class="logHome panel panel-default panel-body">
		<form method="POST" action="specification.php" enctype="multipart/form-data">
			<h1 class="text-success">Insert Data</h1>
		
		 	<label for="id">Product Name</label><input type="text" class="form-control" name="pname" required autofocus>
			<label for="id">Price</label><input type="text" class="form-control" name="price" required>
			<label for="id">Model no.</label><input type="text" class="form-control" name="model" required>
			<label for="id">Quantity</label><input type="text" class="form-control" name="qua" required>
			<label for="id">Descriptio</label><textarea name="descr" class="form-control" cols="22" rows="4" placeholder="Say something about product...." required></textarea>
			<div>
			<label for="id">Image</label><input type="file" name="image"  onchange="readURL(this);" id="tohide"  >

				<img id="blah" src="preview.jpg" alt="your image" width="140px" height="90px" />
				<input type="button" value="Select Image" class="upload" onclick="document.getElementById('tohide').click()">
				<script src="assets/js/jquery-3.2.1.min.js"></script>

				<!--image preview process using jQuery-->
				<script>
					     function readURL(input) {
				            if (input.files && input.files[0]) {
				                var reader = new FileReader();

				                reader.onload = function (e) {
				                    $('#blah')
				                        .attr('src', e.target.result);
				                };

				                reader.readAsDataURL(input.files[0]);
				            }
				        }
				</script>
			</div>
			 <input type="submit" name="upload" value="Insert">
				<a href="productdisplay.php"><button type="button" class="btn btn-primary">SEE TABLE</button></a>
			
		</form>		
		</div>
	</div>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
