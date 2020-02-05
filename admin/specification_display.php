<?php
	include "admindbcon.php";
	session_start();
	if(!isset($_SESSION['ID']))
	{
		header('location:index.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin | Product Specification Details</title>
<link rel="shortcut icon" href="logo/favicon1.ico">
<link rel="stylesheet" type="text/css" href="admin.css">
<!-- <link rel="stylesheet" type="text/css" href="specification_display.css"> -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<style type="text/css">
	/* #content{
	margin: 5% auto;
 	width: 50%;
 	margin: 20px auto;
 	border: 1px solid #cbcbcb;
 }*/
 
</style>

</head>

<body style="background-color: rgba(177,177,177,1.00)">
	<?php include "header.php" ?>
	
	
	<!-- <div id="content"> -->
	<div id="displayHome">
			<!-- <div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" area-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Success!</strong>Your data has been deleted.
			</div> -->
			<div style="height:1px; ">
			<?php
				$pmodel = $_GET['pmodel'];
				$db = mysqli_connect("localhost","root","","admin");
				$sql = "SELECT * FROM prod WHERE model='$pmodel' ";
				$result = mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($result))
				{	
			?>
					<a class="btn btn-danger disabled" style="font-weight: bold; font-size: 16px; height: 35px; width: 200px;"><?php echo $row['pname']." : ".$row['model']?></a>
			<?php
				}
			?>
			</div>
			<div align="right">
				<a href="display_order.php"><button type="button" class="btn btn-primary">VIEW ORDER</button></a>
				<a href="productdisplay.php"><button type="button" class="btn btn-primary">ALL PRODUCT</button></a>
				<a href="home.php"><button type="button" class="btn btn-primary">INSERT DATA</button></a>
			</div>
			<table class='table table-striped table-bordered table-hover'>
			<thead>
				<tr class='text-primary'>
					
					<th ><center>Product</center></th>
					<th ><center>Specification</center></th>
				</tr>
			</thead>
			<tfoot>
				<tr class='text-primary'>
					<th ><center>Product</center></th>
					<th ><center>Specification</center></th>
				</tr>
			</tfoot>

			<tbody>
				<tr>
				<!-- For product details -->
					<?php
						$pmodel = $_GET['pmodel'];
						$db = mysqli_connect("localhost","root","","admin");
						$sql = "SELECT * FROM prod WHERE model='$pmodel' ";
						$result = mysqli_query($db,$sql);
						while($row = mysqli_fetch_assoc($result))
						{	
					?>
					<td>
						<div style="height: 409px; width: 420px;">
							<img src="image/<?php echo $row['image'] ?>" style="height: 409px; width: 477px; max-width: 477px !important;">					
						</div>
						<div class="text text-danger" style="font-weight: bold;">
							<table class='table table-striped table-hover'>
								<tr>
									<td>
										<p><h5 style="font-weight: bold;">Company:</h5></p>
									</td>
									<td>
										<p><h5 style="font-weight: bold;"><?php echo $row['pname']?></h5></p>
									</td>
								</tr>
								<tr>
									<td>
										<p><h5 style="font-weight: bold;">Model:</h5></p>
									</td>
									<td>
										<p><h5 style="font-weight: bold;"><?php echo $row['model']?></h5></p>
									</td>
								</tr>
								<tr>
									<td>
										<p><h5 style="font-weight: bold;">Price:</h5></p>
									</td>
									<td>
										<p><h5 style="font-weight: bold;">Rs.<?php echo $row['price']?>/-</h5></p>
									</td>
								</tr>
							</table>
						</div>
					</td>
					<?php
						}
					?>
					
				<!-- For product specification -->
					<?php
						$pmodel = $_GET['pmodel'];
						$db = mysqli_connect("localhost","root","","admin");
						$sql = "SELECT * FROM product_specification WHERE pmodel='$pmodel' ";
						$result = mysqli_query($db,$sql);
						while($row = mysqli_fetch_assoc($result))
						{	
					?>
					<td>
						<table class='table table-striped table-hover'>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Released Date:</h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['released_date']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Weight: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['weight']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Thickness: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['thickness']?> thickness</h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">OS Version: </h5></p>
								</td>
								<td>	
									<p><h5 style="font-weight: bold;"><?php echo $row['os_version']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">RAM: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['ram']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>							
									<p><h5 style="font-weight: bold;">ROM: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['rom']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>									
									<p><h5 style="font-weight: bold;">Screen Size: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['screen']?>"</h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Screen Resolution: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['resolution']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Front Camera: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['front_camera']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Rear Camera: </h5></p></h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['rear_camera']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Battery Capacity: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['battery']?> mAh</h5></p>
								</td>
							</tr>
							
							
								
							
								
							
								
							
								
						</table>
					</td>
					<?php
						}
					?>
					
				</tr>
			</tbody>		
			</table>
			
	</div>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>


