<?php
require_once "../models/db_project.php";
	// pre($_POST);

	if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['cpass'])){
		echo "Invalid Current Password";
	}
	else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['npass'])){
		echo "Invalid New Password";
	}
	else if($_POST['npass']!=$_POST['cnpass']){
		echo "new pass does not match with confirm new password";
	}
	else if($_POST['npass']==$_POST['cpass']){
		echo "new pass should be different from current password";
	}
	else {
		echo "ok";
		// print_r($_SESSION);
		// echo $_SESSION['project_email'];
		$dbpass=$obj->get_password_userwise($_SESSION['project_email']);
		// pre($dbpass);
		// echo $dbpass[0]['us_password'];
		// echo sha1($_POST['cpass']);

		
		if(sha1($_POST['cpass'])==$dbpass[0]['us_password']){
			echo "ok";
			$newpass=sha1($_POST['npass']);
			// echo $newpass;
			$email=$_SESSION['project_email'];
			$fans=$obj->update_password($newpass,$email);
			var_dump($fans);
		}
		else {
			echo "curent pasword mismatch";
		}
	}
?>