<!--session ending process or logout process-->
<?php
	session_start();
	session_destroy();
	header('location:index.php');


?>