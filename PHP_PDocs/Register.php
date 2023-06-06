<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="CSS/log_style.css">
  <link rel="stylesheet" type="text/css" href="CSS/contactus.css">

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
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="Register.php">
  	<?php include('Errors.php'); ?>
  	<div class="form-title">
	<!-- REG NEW ACC UN -->
  	  <input type="text" class="form-input" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-wrapper">
	<!-- REG NEW ACC @ -->
  	  <input type="email" class="form-input" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-wrapper">
	<!-- REG NEW ACC PASS -->
  	  <input type="password" class="form-input" name="password_1" placeholder="Password">
  	</div>
  	<div class="input-wrapper">
	<!-- REG NEW ACC CPASS -->
  	  <input type="password" class="form-input" name="password_2" placeholder="Confirm password">
  	</div>
  	<div class="input-wrapper"> 
  	  <button type="submit" class="form-btn" name="reg_user">Sign Up</button>
  	</div>
  	<p>
		<br>
  		Already have an account? <a href="Login.php">Sign In</a>
  	</p>

</div>
  </form>

  
</body>
</html>