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
				<a href="productdisplay.php"><button type="button" class="btn btn-primary">ALL PRODUCT</button></a>
				<a href="home.php"><button type="button" class="btn btn-primary">INSERT DATA</button></a>
			</div>
			<table class='table table-striped table-bordered table-hover'>
			<thead>
				<tr class='text-primary'>
					
					<th width='120px'><center>First Name</center></th>
					<th width='100px'><center>Last Name</center></th>
					<th width='50px'><center>Email</center></th>
					<th width='100px'><center>Address</center></th>
					<th width='70px'><center>City</center></th>
					<th width="50px"><center>PinCode</center></th>		
					<th><center>Contact no</center></th>
					<th width='185px'><center>Other</center></th>
				</tr>
			</thead>
			<tfoot>
				<tr class='text-primary'>
					<th width='120px'><center>First Name</center></th>
					<th width='100px'><center>Last Name</center></th>
					<th width='50px'><center>Email</center></th>
					<th width='100px'><center>Address</center></th>
					<th width='70px'><center>City</center></th>
					<th width='50px'><center>PinCode</center></th>
					<th><center>Contact no</center></th>
					<th width='185px'><center>Other</center></th>
				</tr>
			</tfoot>

			<?php
			$db = mysqli_connect("localhost","root","","admin");
			$sql = "SELECT * FROM confirm_order_address ORDER BY id DESC";
			$result = mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result))
			{
			?>
			<tbody>
				<tr>
					<td width='120px'><?php echo $row["firstname"] ?></td>
					<td><?php echo $row["lastname"] ?></td>
					<td width='100px'><?php echo $row["email"] ?></td>
					<td width='50px'><?php echo $row["address"] ?></td>
					<td width='100px'><?php echo $row["city"] ?></td>
					<td><?php echo $row["pincode"] ?></td>
					<td width='50px'><?php echo $row["contactno"] ?></td>
					<td class="text text-success">
						<a href="display_order_1.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Order</a><a href="display_order.php?remove=<?php echo $row['id'] ?>" style="margin-left:10px;"" onclick="return confirm('Are you sure');" class="btn btn-danger">Delivered</a></td>
					</td>
				</tr>

				<?php
				}

				?>
				<!--for order remove operation-->
				<?php
					if(isset($_GET['remove']))
					{	
						$remove = $_GET['remove'];

						//for deleting orderd product detail
						$sql = "SELECT * FROM confirm_order_product ORDER BY id DESC";
						$result = mysqli_query($db,$sql);
						$del = mysqli_query($db,"DELETE FROM confirm_order_product WHERE order_id = $remove");

						//for deleting ordered address detail
						$res = mysqli_query($db,"DELETE FROM confirm_order_address WHERE id = '$remove'");
						if($res && $del)
						{
							?>
							<script type="text/javascript">
								window.location = "display_order.php?oRdEr--Removed=<?php echo $remove ?>";
							</script>
							<?php
							
						}
					}

				?>
			</tbody>		
			</table>
		
	</div>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
