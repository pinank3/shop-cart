<?php
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['project_uid']);
	unset($_SESSION['project_name']);
	unset($_SESSION['project_email']);
	unset($_SESSION['project_dob']);
	session_destroy();
	header("location:login.php");

?>