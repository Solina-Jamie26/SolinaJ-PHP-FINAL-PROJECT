<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Registration PHP and MySQL</title>
  	<link rel="stylesheet" type="text/css" href="CSS/log_style.css">
	<link rel="stylesheet" type="text/css" href="CSS/contactus.css">
	<script src="../JS/headerscroll.js"></script>

<style>

body {
	margin: 0; /* To remove whitespaces. */
	overflow-x: hidden;
	background-color: #fff;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-image: url(ASSETS/geometricbg.jpg);
	background-color: rgba(255, 255, 255, 0.75);
	background-blend-mode: lighten;
	font-family: 'work sans', sans-serif;
	font-size: 120%;
}

</style>
</head>

<body>
  <div class="contact-form">
  	<h2>Log In</h2>
  </div>

  <form method="post" action="Login.php">
  	<?php include('Errors.php'); ?>
	<!-- LOG IN USERNAME  -->
  	<div class="input-wrapper">
  		<input type="text" class="form-input" name="username" placeholder="Username">
  	</div>
	<!-- LOG IN PASSWORD  -->
  	<div class="input-wrapper">
  		<input type="password" class="form-input" name="password" placeholder="Password">
  	</div>
  	<div class="input-wrapper">
  		<button type="submit" class="form-btn" name="login_user">Submit</button>
  	</div>
  	<p>
  		Not yet a member? <a href="Register.php">Create new account</a>
  	</p>
  </form>
</body>
</html>