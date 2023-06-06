<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marinduque Events Calendar</title>
	<link rel="icon" href="ASSETS/logo1.png">
	<link rel="stylesheet" href="CSS/main2.css">
	<script src="JS/headerscroll.js"></script>

	<!-- For the jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
	
	* {
		box-sizing: border-box;
	}

	.img01, .img02 {
		width: 100%;
		vertical-align: middle;
	}

/* Slideshow container */
	.imgcontainer {
		height: 100%;
		width: 100%;
		position: absolute;
		top: 0;
		margin: auto;
		z-index: -1;
		overflow: hidden;
	}

	.text-front-container {
		width: 100%;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		position: absolute;
		padding-top: 15%;
		text-align: center;
		color: white;
		font-size: 150%;
		z-index: 1;
	}



	.fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 2s;
		animation-name: fade;
		animation-duration: 2s;
	}

	@-webkit-keyframes fade {
		0% {opacity: .3} 
		75% {opacity: 1}
		100% {opacity: .4}
	}

	@keyframes fade {
		0% {opacity: .3} 
		75% {opacity: 1}
		100% {opacity: .4}
	}

	.text-container {
		position:absolute;
		top: 115%;
		width: 100%;
		height: 1000px;
		z-index: 2;
	}

	.images {
		width: 100%;
	}

	.flex {
	  display: flex;
	  padding: 20px;
	  margin: auto;
	  width: 80%;
	}

	.text {
		padding: 45px 15px;
		font-size: 100%;
	}

	.textheaders {
		color: skyblue;
		font-weight: bold;
		font-size: 35px;
	}

	.texts {
		font-size: 22px;
		text-align:inherit;
		margin-left: 50px;
	}



	.fadein {
		opacity: 0;
	}

	.imgcontainer:after{
		content:'';
		position: absolute;
		left: 0;
		top: 0;
		height: 114.5%;
		width: 100%;
		background-color: black;
		opacity: .6;
		z-index: 0;
	}

	.headerlist a {
		color: white;
	}

	.linkbtn {
		display: inline-block;
		background-color: skyblue;
		color: white;
		border-radius: 50px;
		text-align: center;
		text-decoration: none;
		width: 30%;
		padding: 20px;
		font-size: 30px;
	}

	.linkbtn:hover {
		background-color: #B0DDF0;
	}

	.accounts {
		margin-top: 10%;
		text-align: center;
	}

	.account-container {
		width: 50%;
		margin: auto;
	}

	.account-container a {
	  width: 100px;
	  margin: 10px;
	  text-align: center;
	  line-height: 75px;
	  transition: transform 0.4s;
	  align-self: center;
	}


	.account-container a img {
		display: block;
		width: 100%;
		margin: auto;
	}


	.imgcontainer {
		overflow: hidden;
	}



</style>
</head>
<body>
	

<ul id="header" class="scrollback">
	<li class="headerimg" id="imgdiv">
		<img src="ASSETS/logo1.png" height="100px" width="100px">
	</li>
	<li class="headerlist"><a href="Login.php" class="headerlinks">Log Out</a></li>
	<li class="headerlist"><a href="Pages/Contact_Us.php"class="headerlinks">Contact Us</a></li>
	<li class="headerlist"><a href="Pages/Events.php" class="headerlinks">Events</a></li>
	<li class="headerlist"><a href="index.php" class="headerlinks">Home</a></li>
</ul>

<div class="div01">

	<div class="imgcontainer">
		
		<div class="video-container">
			<video id="myVideo" src="ASSETS/bg1.mp4" muted autoplay loop></video>
		  </div>
		  
		  <script>
			window.addEventListener('DOMContentLoaded', (event) => {
			  const video = document.getElementById('myVideo');
			  video.play();
			});
		  </script>
		  
	</div>

	<div class="text-front-container">
	
		<h2>The Marinduque: Heart of the Philippines </h2>
	
		<h1>"MARINDUQUE EVENTS"</h1>
		
	</div>

	<div class="text-container">
		<div class="fadein flex">
			<div class="img">
			</div>
			<div class="imgslide fade">
				<img src="ASSETS/MARINDUQUE_LOGO.png" class="img01">
			</div>
			<div class="imgslide fade">
				<img src="ASSETS/BOAC_LOGO.png" class="img01">
			</div>
			<div class="imgslide fade">
				<img src="ASSETS/MOGPOG_LOGO.png" class="img01">
			</div>
			<div class="imgslide fade">
				<img src="ASSETS/STA.CRUZ_LOGO.png" class="img01">
			</div>
			<div class="imgslide fade">
				<img src="ASSETS/TORRIJOS_LOGO.png" class="img01">
			</div>	
			<div class="imgslide fade">
				<img src="ASSETS/BUENAVISTA_LOGO.png" class="img01">
			</div>
			<div class="imgslide fade">
				<img src="ASSETS/GASAN_LOGO.png" class="img01">
			</div>
			<div class="text-container-left">
        <h1 class="textheaders">  Are you finding events that suit you?</h1>
        <p class="texts"> Marinduque hosts a variety of remarkable events that enchant and engage people from diverse backgrounds. <br>
		 From lively festivals to cultural exhibitions, these occasions allow attendees to embrace local traditions, savor delicious cuisine,
		<br> and forge lasting memories, ensuring an unforgettable experience in the captivating province of Marinduque.</p>
      </div>
		</div>

		<div class="accounts fadein">
			
			<h1 class="textheaders">Official Accounts</h1>
			<div class="account-container fadein">
			<a href="https://mogpog.gov.ph/" target="_blank"><img src="ASSETS/MOGPOG_LOGO.png" alt="MOGPOG LGU LINK"></a>
			<a href="https://boac.gov.ph/" target="_blank"><img src="ASSETS/BOAC_LOGO.png" alt="Youtube Link"></a>
			<a href="https://gasan.gov.ph/" target="_blank"><img src="ASSETS/GASAN_LOGO.png" alt="bilibili Link"></a>
			<a href="https://buenavista.gov.ph/" target="_blank"><img src="ASSETS/BUENAVISTA_LOGO.png" alt="Nico Nico Link"></a>
			<a href="https://torrijos.gov.ph/" target="_blank"><img src="ASSETS/TORRIJOS_LOGO.png" alt="Reddit Link"></a>
			<a href="https://sta.cruz.gov.ph/" target="_blank"><img src="ASSETS/STA.CRUZ_LOGO.png" alt="Facebook Link"></a>

			</div>


		</div>

		<div class="fadein footer">
			
			<p><small>&copy;2023 COVER Corp.<br><i>All content rights to rightful owners.<br>This website is for personal/educational use only.</i></small></p>

		</div>

	</div>



</div>

<script>
var slideIndex = 0;
logoSlides();

function logoSlides() {
  var i;
  var slides = document.getElementsByClassName("imgslide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block";  
  setTimeout(logoSlides, 2000); // Change image every 2 seconds
}

// Used some jquery, tried to convert it into javascript, but, 
//I do not actually know how since I have only started learning it, so I'll just use jquery.
$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fadein").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else {
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});


</script>

</body>
</html>