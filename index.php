<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
$message="";
if(count($_POST)>0) {
	$data = json_decode(file_get_contents("data.json"));
	$success = false;
	foreach($data as $user){
		if($user->userName == $_POST["userName"] && $user->password == $_POST["password"] ){
			session_start();
			$_SESSION['login_user'] = $user->displayName;
			header("Location: success.php");
		}
	}
	$message = "Invalid username or password!";
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #F9F9F9;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="frmUser" method="post" action="" class="login100-form validate-form">
					<span class="login100-form-title p-b-43" id="legend">
						TEAM SYNTAX
					</span>
					<span class="login100-form-title p-b-43">
						Are you a member? Login
					</span>
					
					<div class="message"><?php if($message!="") { echo $message; } ?></div>
					<div class="wrap-input100 validate-input" data-validate = "Valid user is required: member">
						<input class="input100" type="text" name="userName" placeholder="username">
						<span class="focus-input100"></span>
						
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input100"></span>
						
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<!-- <div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div> -->
					</div>
			

					<div class="container-login100-form-btn">
						<button name="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('https://res.cloudinary.com/yutee/image/upload/v1568615313/bg-02_m3ljzz.jpg');">
				</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
