<?php
	//Start session
	session_start();

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(($_SESSION['type']=="")) {
		header("location: http://localhost/Customer/login.php");
		exit();
	}
?>
