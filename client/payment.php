<?php
	session_start();
	// if($_SESSION["pay"] == "")
	// {
	// 	header('location:front.php');
	// }
	// $_SESSION["paypalphp"] = "yes";
?>
<!-- <h1>Please wait we are transferring you in paypal...</h1> -->
<?php
	$paypal_url = 'http://localhost/project/cart1/payment_success.php';
	$pay = $_SESSION['pay'];
	$order_id = $_SESSION["ordr_id"];
?>

<form action="<?php echo $paypal_url; ?>?id=<?php echo $order_id; ?>" method="post" name="buyCredits" id="buyCredits">
	<fieldset>
  		<legend>Personalia:</legend>
  			Name: <input type="text"><br>
  			Email: <input type="text"><br>
  			Date of birth: <input type="text">
  			<input type="submit" name="submit" value="pay">
	</fieldset>
</form>
<!-- <script type="text/javascript">
	document.getElementById("buyCredits").submit();
</script> -->