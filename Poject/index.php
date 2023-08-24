<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CROSSFIT GYM</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<style>
    body {
      backgorund-color: grey;
	background: url("thumbnail.jpeg") no-repeat center center fixed;
	background-size: cover;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	margin: 0;
	color: #666;
}



h2 {
	text-transform: uppercase;
	color: white;
	font-weight: 400;
	letter-spacing: 1px;
	font-size: 1.4em;
	line-height: 2.8em;
}

a {
	text-decoration: none;
	color: #666;
}

a:hover {
	color: #ffffff;
}

p.small {
	font-size: 0.8em;
	margin: 20px 0 0;
}


/* Layout */
.container {
	margin: 0;
}



.input-group {
	background-color: none;
	max-width: 340px;
	margin: 0 auto;
	position: center;
	top: 10px;
	padding-bottom: 10px;
	border-radius: 0px;
	box-shadow: 0 5px 10px rgba(0,0,0,0.4);
	text-align: center;
}

.input-group .box-header {
	background-color: #554138;
	margin-top: 0;
	border-radius: 5px 5px 0 0;
}

.input-group label {
	font-weight: 700;
	font-size: .8em;
	color: rgb(94, 93, 93);
	letter-spacing: 1px;
	text-transform: uppercase;
	line-height: 2em;
}

.input-group input {
	margin-bottom: 20px;
	padding: 8px;
	border: 1px solid #ccc;
	border-radius: 2px;
	font-size: .9em;
	color: #888;
}

.input-group input:focus {
	outline: none;
	border-color: #a1958c;
	transition: 0.5s;
	color: #817068;
}

.input-group button {
	margin-top: 10px;
	border: 0;
	border-radius: 2px;
	color: black;
	padding: 10px;
	padding-top: 10px;
	text-transform: uppercase;
	font-weight: 400;
	
	font-size: 0.7em;
	letter-spacing: 1px;
	background-color: red;
	cursor:pointer;
	outline: none;
}

.input-group button:hover {
	opacity: 0.7;
	transition: 0.5s;
}

.input-group button:hover {
	opacity: 0.7;
	transition: 0.5s;
}

.selected {
	color: #665851!important;
	transition: 0.5s;
}

/* Animation Delay */
#logo {
  -webkit-animation-duration: 1s;
  -webkit-animation-delay: 2s;
}

.login-box {
  -webkit-animation-duration: 1s;
  -webkit-animation-delay: 1s;
}
.image {
				width: 200px;
				height: 200px;
				border-radius: 50%;
background: solid transparent;
  
                               padding-bottom : 40px;
                                
                       


.login-bottom-links{
	font-style: bold;
	font-size: 20px;
}

  </style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<center><img class="img-responsive image" src="logo1.png" alt = "CROSS FIT Logo"></center>
	<div class="container">
	<div class="login-content">
			
		<center><form action="secure_login.php" method='post' id="bb">				
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
							<input type="text" placeholder="User ID" class="form-control" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true">
					</div>
				</div>				
								
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						<input type="password" name="pass_key" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Password">
					</div>				
				</div>
				
				<div class="form-group">
					<button type="submit" name="btnLogin" class="btn btn-primary">
						Login 
						<i class="entypo-login"></i>
					</button>
				</div>
			</form>
		
				<div class="login-bottom-links">
					<a href="forgot_password.php" class="link">Forgot your password?</a>
				</div>			
		</div>
    </form>
</center>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>