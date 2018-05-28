<?php
	require_once "../models/db_project.php";
	// print_r($_POST);
	// pre($_POST);
	
	if(!preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/",$_POST['username'])){
		echo "Invalid Name";
	}
	elseif(!preg_match("/^([0]?[1-9]|[1][0-9]|[2][0-9]|[3][0-1])-([0]?[1-9]|[1][0-2])-([0-9]{4})$/",$_POST['userdob'])){
		echo "Invalid D.O.B";	
	}
	elseif(!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9]+[a-zA-Z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/",$_POST['useremail'])){
		echo "Invalid Emailid";
	}
	elseif(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['userpassword'])){
		echo "Invalid Password";
	}
	elseif($_POST['userpassword']!=$_POST['cpassword']){
		echo "Invalid CPassword";
	}
	else {
		// echo "ok";
		$name=($_POST['username']);
		$dob=($_POST['userdob']);
		$email=($_POST['useremail']);
		$password=sha1($_POST['userpassword']);
		// echo $password;
		$result= $obj->check_email_count($email);
		// pre($result);
		if($result[0]['cnt']>0){
			echo "Emailid exists";
		}
		else{
			if($obj->user_insert($name,$dob,$email,$password)){
				echo "user added";
			}
		}
	}	

?>