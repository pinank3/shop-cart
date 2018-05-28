<?php
	session_start();
	//print_r($_SESSION);

	if(isset($_SESSION['project_usname'])){
		header("location:index.php");
	}

	require_once "header.php";
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="login_form" ">
							<input type="email" name="useremail" placeholder="Enter User Email Address" /><br>
							<input type="password" name="userpassword" placeholder="Enter User Password"/><br>
							<button type="button" class="btn btn-default btn-login">Login</button>
						</form>
						<div class="msg_login"></div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				 <div class="col-sm-4">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<form id="register_form" ">
							<input type="text" name="username" placeholder="Name" /><br>
							<input type="text" name="userdob" placeholder="D.O.B"/><br>
							<input type="email" name="useremail" placeholder="Enter User Email Address" /><br>
							<input type="password" name="userpassword" placeholder="Enter User Password"/><br>
							<input type="password" name="cpassword" placeholder="Enter User CPassword"/><br>
							<button type="button" class="btn btn-default btn-register">Register</button>
						</form>
						<div class="msg_register"></div>
					</div><!--/sign up form -->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php 

	require_once "footer.php";
?>
	