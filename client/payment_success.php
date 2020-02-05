<?php
	// session_start();
	// if($_SESSION['paypalphp'] == "")     for security
	// {
	// 	header('location:front.php');
	// }
	include "connect.php";
	$order_id = $_GET['id'];

	//this is for getting record from temp table to permanent table
	$res = mysqli_query($con,"SELECT * FROM checkout_address WHERE id='$order_id'");
	while($row = mysqli_fetch_assoc($res))
	{
		$fname = $row["firstname"];
		$lname = $row["lastname"];
		$email = $row["email"];
		$address = $row["address"];
		$city = $row["city"];
		$pincode = $row["pincode"];
		$contactno = $row["contactno"];
	}

	mysqli_query($con,"INSERT INTO confirm_order_address VALUES('','$fname','$lname','$email','$address','$city','$pincode','$contactno')");

	//now need to get permanent table order id

	$res = mysqli_query($con,"SELECT id FROM confirm_order_address ORDER BY id DESC LIMIT 1");
	while($row = mysqli_fetch_array($res))
	{
		$id = $row["id"];
	}

	foreach($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move
	{
		$values11 = explode("__",$value);

		mysqli_query($con,"INSERT into confirm_order_product VALUES('','$id','$values11[1]','$values11[2]','$values11[3]','$values11[0]','$values11[4]')"); //these all value came from cookies
	}
	
	echo "your order get successfully we deliver product soon";	

	// $_SESSION['pay'] = "";
	// $_SESSION['paypalphp'] = "";       for security
	foreach($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move 3 times
		{
				setcookie("item[$name1]", ""  ,time()-1800);
		}
?>

<script type="text/javascript">
	setTimeout(function(){
		window.location = "index.php";
	},1000);
</script>