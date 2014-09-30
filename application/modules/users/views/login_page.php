<!DOCTYPE html>
<html>
	<head>
		<title>System | Login</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/style.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/animate.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/login.css'?>">
	</head>
	<body>
	<div class = "centered">
		<div class = "animated fadeInDown user_image">
			<img src="<?php echo base_url() . 'assets/images/profile-01.jpg'?>">
		</div>
		<div class="animated bounceInLeft form">
		<form method = "POST" action = "" id= "login-form">
	        <input type="text" class="zocial-dribbble" placeholder="Username" id = "uname" name = "username"/>
	        <input type="password" placeholder="Password" id = "upass" name = "password"/>
	        <input type="submit" value="Login" id = "login-button"/>
        <a href="">Lost your password?</a>
        <div id = "result"></div>
        </form>
      </div> 
	</div>
	<script type="text/javascript" src = "<?php echo base_url() . 'assets/js/jquery.min.js'?>"></script>
	<script type="text/javascript" src = "<?php echo base_url() . 'assets/js/core.js'?>"></script>
	<script type="text/javascript" src = "<?php echo base_url() . 'assets/js/modernizr.js'?>"></script> 
	</body>
</html>