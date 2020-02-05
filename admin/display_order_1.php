<?php
	include "admindbcon.php";
	session_start();

	if(!isset($_SESSION['ID']))
	{
		header('location:index.php');
	}
	$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin | Product Details</title>
<link rel="shortcut icon" href="logo/favicon1.ico">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="style.css">
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
			<div align="right">
				<a href="display_order.php"><button type="button" class="btn btn-primary">VIEW ORDER</button></a>
				<a href="productdisplay.php"><button type="button" class="btn btn-primary">ALL PRODUCT</button></a>
				<a href="home.php"><button type="button" class="btn btn-primary">INSERT DATA</button></a>
			</div>
			<table class='table table-striped table-bordered table-hover'>
			<thead>
				<tr class='text-primary'>
					
					<th width='120px'><center>product image</center></th>
					<th width='100px'><center>product name</center></th>
					<th width='50px'><center>product price</center></th>
					<th width='100px'><center>quantity</center></th>
					<th width='70px'><center>Total</center></th>
				</tr>
			</thead>
			<tfoot>
				<tr class='text-primary'>
					<th width='120px'><center>product image</center></th>
					<th width='100px'><center>product name</center></th>
					<th width='50px'><center>product price</center></th>
					<th width='100px'><center>quantity</center></th>
					<th width='70px'><center>Total</center></th>
				</tr>
			</tfoot>

			<?php
			$db = mysqli_connect("localhost","root","","admin");
			$res = mysqli_query($db,"SELECT * FROM confirm_order_product WHERE order_id=$id");
			while($row = mysqli_fetch_assoc($res))
			{
			?>
			<tbody>
				<tr>
					<td width='120px'><img src="image/<?php echo $row['image']; ?>" height="60" width="100"></center></td>
					<td><center><?php echo $row["pname"] ?></center></td>
					<td width='100px'><center><?php echo $row["price"] ?></center></td>
					<td width='50px'><center><?php echo $row["quantity"] ?></center></td>
					<td width='100px'><center><?php echo $row["total"] ?></center></td>
				</tr>

				<?php
				}

				?>
			</tbody>		
			</table>
			<div style="margin-left: 10px; margin-top: -10px; ">
				<?php
					$res = mysqli_query($link,"SELECT * FROM confirm_order_address WHERE id=$id");
					$row = mysqli_fetch_array($res);
				?>
				<p><h3 class="text text-success"  style="font-weight: bold;">Customer Details:</h3></p>
				<hr style="margin-top: -10px; margin-bottom: -10px; width: 200px; height: 10px; " align="left">
				<div class="text text-danger" style="font-weight: bold;">
					<p><h5 style="font-weight: bold;">Name: <?php echo $row['firstname']." ".$row['lastname'] ?></h5></p>
					<p><h5 style="font-weight: bold;">Address: <?php echo $row['address']?></h5></p>
					<p><h5 style="font-weight: bold;">City: <?php echo $row['city']?></h5></p>
					<!-- for mail send  -->
					<p><h5 style="font-weight: bold;">Email: <a href="mailto:<?php echo $row['email'] ?>?Subject=Order delivery...&body=Dear Customer,%0D%0AYour%20order%20deliver%20within%202%20days....%0D%0A %0D%0AThank you."><?php echo $row['email'] ?></a></h5></p>
					<p><h5 style="font-weight: bold;">Pin Code: <?php echo $row['pincode']?></h5></p>
					<p><h5 style="font-weight: bold;">Contact no.: <?php echo $row['contactno']?></h5></p>
				</div>
			</div>
	</div>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>


