<!--edit already stored data-->
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
	<div id="ehome">
		<div class="elog panel panel-default panel-body">
		<form method="post" enctype="multipart/form-data">	
		<h1 class="text-success">Update Data</h1>
		<!--data updating process-->
		<?php
			$up = $_GET['update'];
			include "admindbcon.php";
			$query = mysqli_query($link, "SELECT * FROM prod WHERE id = '$up' limit 0,1");
			$row = mysqli_fetch_assoc($query);
			
			
			if(isset($_POST['updat']))
			{
				$target = "image/".basename($_FILES['image']['name']);	//image location target

				if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) //stored image file in location
				{
					$msg ="Image uploaded successfully";
				}
				else
				{
					$msg = "There was a problem uploading image";
				}

				$pname = $_POST['pname'];
				$price = $_POST['price'];
				$model = $_POST['model'];
				$qua = $_POST['qua'];
				$descr = $_POST['descr'];
				$image = $_FILES['image']['name'];		//define image
				
				$result = mysqli_query($link,"UPDATE prod SET pname = '$pname', price = '$price', model = '$model', quantity = '$qua', descr = '$descr', image = '$image' WHERE pname = '$up'");
				if($result)
				{
		?>

		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" area-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>Success!</strong>Your data has been updated.
		</div>

		<?php
				}
				else
				{
		?>
				
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" area-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>Fail!</strong>Error updating data, please try again.
		</div>

		<?php
				}
			}

		?>
		
		<label for="id">Product Name</label><input type="text" class="form-control" name="pname" value="<?php echo $row['pname'] ?>" >
		<label for="id">Price</label><input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>" >
		<label for="id">Model no.</label><input type="text" class="form-control" name="model" value="<?php echo $row['model'] ?>" >
		<label for="id">Quantity</label><input type="text" class="form-control" name="qua" value="<?php echo $row['quantity'] ?>" >
		<label for="id">Description</label><textarea name="descr" class="form-control" cols="22" rows="4" value="<?php echo $row['descr'] ?>" ></textarea>
		<div>
		<label for="id">Image</label><input type="file" name="image"  onchange="readURL(this);" id="tohide"  >

		<img id="blah" src="image/<?php echo $row['image'] ?>" alt="your image" width="140px" height="90px" />
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


			<input type="submit" name="updat" value="UPDATE">
				<a href="productdisplay.php"><button type="button" class="btn btn-primary">SEE TABLE</button></a>
			
		</form>	
		</div>
	</div>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
