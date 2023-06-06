

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marinduque Events Calendar</title>
	<link rel="icon" href="../ASSETS/logo1.png">
	<link rel="stylesheet" href="../CSS/main2.css">
	<link rel="stylesheet" href="../CSS/additionalstyles.css">
	<script src="../JS/headerscroll.js"></script>

<style>
	
	.holoaltlogo { /* Centers image horizontally and verically inside the container. */
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
		right: 0;
		left: 0;
		z-index: 1;
		width: 50%;
	}

	#img01 {
		width: 100%;
	}

	.morionaltteaser {
		padding: 100px;
		text-align: center;
	}

	.whitebg {
		background-color: white;
	}

	.event {
		margin: 50px auto;
	}


	body {
	margin: 0; /* To remove whitespaces. */
	overflow-x: hidden;
	background-color: #fff;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-image: url(../ASSETS/geometricbg.jpg);
	background-color: rgba(255, 255, 255, 0.75);
	background-blend-mode: lighten;
	font-family: 'work sans', sans-serif;
	font-size: 120%;
	}

	.main-container {
	height: 100%;
	}

	.footer {
		position: absolute;
		top: 320%;
	}


</style>

</head>
<body>
	
<ul id="header" class="scrollback">
	<li class="headerimg" id="imgdiv">
		<img src="../ASSETS/logo1.png"  style="height: inherit;" id="holologo" onclick="window.location = '../index.php'">
	</li>
	<li class="headerlist"><a href="../Login.php" class="headerlinks">Log Out</a></li>
	<li class="headerlist"><a href="../Pages/Contact_Us.php" target="headerlinks" class="headerlinks">Contact Us</a></li>
	<li class="headerlist"><a href="../Pages/Events.php" class="headerlinks">Events</a></li>
	<li class="headerlist"><a href="../index.php" class="headerlinks">Home</a></li>
</ul>
<div class="div01">
<div class="whitebg">
	<div class="main-container">
		<div class="morionaltteaser">
			<iframe width="80%" height="500" src="https://www.youtube.com/embed/qsjgD-mlBBI" title="Moriones News" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

</div>
<div class="center ministrymedium text">
		<br>
		<h1 style="font-size: 85px;">Marinduque Calendar of Events</h1>

		<span style="font-size: 30px; font-weight: bold;">
		<p>"Unleash Your Adventurous Spirit:"<br>
 Discover the Enchanting Wonders of Marinduque!</p>
		</span>

	</div>
	<div class="footer">
			
			<p><small>&copy;2016 COVER Corp.<br><i>All content rights to rightful owners.<br>This website is for personal/educational use only.</i></small></p>

	</div>

</div>

</body>
</html>

<?php
        if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $xml = simplexml_load_file('events.xml');
    $found = false;
    foreach ($xml->event as $event) {
        if (stripos($event->title, $search) !== false) {
            echo '<div class="event">';
            echo '<h3>' . $event->title . '</h3>';
            echo "<img src='images/{$event->image}' alt='event Image'>";
            echo '<p>' . $event->details . '</p>';
            echo '<p><strong>Location:</strong> ' . $event->location . '</p>';
            echo '<p><strong>Date:</strong> ' . $event->date . '</p>';
            echo '</div>';
            $found = true;
        }
    }
    if (!$found) {
        echo '<p>No results found.</p>';
    }
    // Display the search metadata
    echo '<p>Showing results for search: ' . $search . '</p>';
    
 	}else {
        $xml = simplexml_load_file('events.xml');
        foreach ($xml->event as $event) {
            echo '<div class="event">';
            echo '<h3>' . $event->title . '</h3>';
            echo "<img src='images/{$event->image}' alt='event Image>";
            echo '<p>' . $event->details . '</p>';
            echo '<p><strong>Location:</strong> ' . $event->location . '</p>';
            echo '<p><strong>Date:</strong> ' . $event->date . '</p>';
            echo '</div>';
        }
        }
?>