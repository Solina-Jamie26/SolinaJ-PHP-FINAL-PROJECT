<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="icon" img src="../ASSETS/logo1.png">
	<link rel="stylesheet" href="../CSS/contactus.css">
	<script src="../JS/headerscroll.js"></script>

	<!-- For the jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
	


	#header	 {
			list-style-type: none;
			margin: 0;
			padding: 0;
			top: 0; /* To remove the white space on top, and to also set its position at the topmost of the page. */
			overflow: hidden;
			background-color: transparent;
			position: fixed; /* Fixes the header in place */
			width: 100%;
			z-index: 4;
		}
		
	body {
		margin: 0; /* To remove whitespaces. */
		overflow-x: hidden;
		background-color: #fff;
		width: 100%;
		height: 100%;
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-image: url(../ASSETS/geometricbg.jpg);
			background-color: rgba(255,255,255, 0.75);
			background-blend-mode: lighten;	
	}

		.center {
			text-align: center;
		}

		.headerlist {
			float: right; /* To set the list, excluding the logo, to the right. */

		}

		.headerlist a {
			display: block;
			color: #000;
			font-family: "work sans", arial, sans-serif; /* Used the custom font with a fallback system. */
			text-align: center;
			padding: 32px 36px;
			text-decoration: none;
			border-bottom: 3px solid transparent;
		}

		#header.scroll li > a  {
			animation-name: headerscroll;
			animation-fill-mode: forwards;
			animation-duration: 0.6s;
		}
		
		#header.scrollback li > a {
			animation-name: headerscrollback;
			animation-fill-mode: forwards;
			animation-duration: 0.6s;
		}

		#imgdiv {
			position: fixed;
			animation-duration: 2000ms;
			animation-timing-function: steps(60);

		}
		.headerimg img {
			cursor: pointer;
			height: 30%;
			width: 30%;
		}

		.footer {
			position: absolute;
			bottom: 2%;
			right: 5%;
			text-align: right;
		}

	</style>

</head>
<body>
	<ul id="header" class="scrollback">
		<li class="headerimg" id="imgdiv">
			<img src="../ASSETS/logo1.png" height="100px" width="100px">
		</li>
		<li class="headerlist"><a href="../Login.php" class="headerlinks">Log Out</a></li>
		<li class="headerlist"><a href="../Pages/Contact_Us.php"class="headerlinks">Contact Us</a></li>
		<li class="headerlist"><a href="../Pages/Events.php" class="headerlinks">Events</a></li>
		<li class="headerlist"><a href="../index.php" class="headerlinks">Home</a></li>
	</ul>

	<div class="contact-form">

		<h3 class="h3 form-title">Contact Form</h3>

		<form action="#" class="form" data-form>

		  <div class="input-wrapper">
			<input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

			<input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
		  </div>

		  <textarea name="message" class="form-input" placeholder="Message" required data-form-input></textarea>

		  <button class="form-btn" type="submit" disabled data-form-btn>
			<ion-icon name="paper-plane"></ion-icon>
			<span>Send</span>
		  </button>

		</form>

	</div>

	<div class="footer">
			
			<p><small>&copy;2016 COVER Corp.<br><i>All content rights to rightful owners.<br>This website is for personal/educational use only.</i></small></p>

	</div>

</div>

</body>
</html>