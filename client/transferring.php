<?php
	include "connect.php";
	session_start();
	$_SESSION["ordr_id"] = $_SESSION["order_id"];


?>
<h1>Please wait we are transferring you in payment...</h1>
<script type="text/javascript">
	setTimeout(function(){
				window.location = "payment/payment.php";
			},500);
</script>