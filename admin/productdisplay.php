<!--display data from databases-->
<?php
	include "admindbcon.php";
	session_start();

	if(!isset($_SESSION['ID']))
	{
		header('location:index.php');
	}
?>

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
		//echo $pmodel.$released_date.$weight.$thickness.$os_version.$ram.$rom.$screen.$resolution.$front_camera.$rear_camera.$battery;

		$query = "INSERT INTO product_specification (pmodel, released_date, weight, thickness, os_version, ram, rom, screen, resolution, front_camera, rear_camera, battery) VALUES('$pmodel','$released_date','$weight','$thickness','$os_version','$ram','$rom','$screen','$resolution','$front_camera','$rear_camera','$battery')";
		$result = mysqli_query($link, $query);
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
				<a href="display_order.php"><button type="button" class="btn btn-primary">VIEW ORDER</button></a>
				<a href="home.php"><button type="button" class="btn btn-primary">INSERT DATA</button></a>
			</div>
			<table class='table table-striped table-bordered table-hover'>
			<thead>
				<tr class='text-primary'>
					<th>S.N.</th>
					<th width='100px'><center>PRODUCT NAME</center></th>
					<th width='50px'><center>PRICE</center></th>
					<th width='100px'><center>MODEL NO.</center></th>
					<th width='200px'><center>DESCRIPTION</center></th>
					<th width='50px'><center>QANTITY</center></th>
			
					<th width='120px'><center>IMAGE</center></th>
					<th><center>ACTION</center></th>
				</tr>
			</thead>
			<tfoot>
				<tr class='text-primary'>
					<th>S.N.</th>
					<th width='100px'><center>PRODUCT NAME</center></th>
					<th width='50px'><center>PRICE</center></th>
					<th width='100px'><center>MODEL NO.</center></th>
					<th width='200px'><center>DESCRIPTION</center></th>
					<th width='50px'><center>QANTITY</center></th>
			
					<th width='120px'><center>IMAGE</center></th>
					<th><center>ACTION</center></th>
				</tr>
			</tfoot>

			<?php
			$db = mysqli_connect("localhost","root","","admin");
			$sql = "SELECT * FROM prod";
			$result = mysqli_query($db,$sql);
			$i=1;
			while($row = mysqli_fetch_assoc($result))
			{
			?>
			<tbody>
				<tr>
					<td><?php echo $i ?></td>
					<td width='100px'><?php echo $row['pname'] ?></td>
					<td width='50px'><?php echo $row['price'] ?></td>
					<td width='100px'><?php echo $row['model'] ?></td>
					<td><div style="height: 70px; width: 200px; overflow-y: hidden;">
						<?php echo $row['descr'] ?>
					</div></td>
					<td width='50px'><?php echo $row['quantity'] ?></td>
					<td width='120px'><img src="image/<?php echo $row['image']?>"></td>
					<td ><center><a href="edit.php?update=<?php echo $row['id'] ?>" class="btn btn-warning">EDIT</a>
					<a href="productdisplay.php?delete=<?php echo $row['model'] ?>" style="margin-left:10px;" onclick="return confirm('Are you sure');" class="btn btn-danger">DELETE</a>
					<a href="specification_display.php?pmodel=<?php echo $row['model'] ?>" style="margin-left:10px; margin-top: 5px;" class="btn btn-success">SPECIFICATION</a></center></td>
				</tr>

				<?php
					$i++;
				}

				?>
				<!--for delete operation-->
				<?php
					if(isset($_GET['delete']))
					{
						$delete = $_GET['delete'];
						$res = mysqli_query($db,"DELETE FROM prod WHERE model = '$delete'");
						$res1 = mysqli_query($db,"DELETE FROM product_specification WHERE pmodel = '$delete'");
						if($res && $res1)
						{
							?>
							<script type="text/javascript">
								window.location = "productdisplay.php?D1b@s_DON_id=<?php echo $delete ?>";
							</script>
							<?php
							// header('location:productdisplay.php');
						}
						else
						{
							header('location:productdisplay.php');
							
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