<?php  
	
	 // session_start();
	 // if(!isset($_SESSION['project_usname'])){
	 // 	header("location:index.php");
	 // }
	require_once "header.php";
?>
<div class="container">
<div>
	<form id="update_form" ">
	<h2>Change password</h2>							
		<input type="password" name="cpass" placeholder="Enter current password" /><br>
		<input type="password" name="npass" placeholder="Enter new  Password"/><br>
		<input type="password" name="cnpass" placeholder="Enter CPassword"/><br>
		<button type="button" class="btn btn-default btn-update">Update</button>
	</form>
	<div class="msg_update"></div>
</div>
</div>
<?php 

	require_once "footer.php";
?>