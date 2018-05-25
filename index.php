<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- NAVBAR -->
<nav class="navbar fixed-top navbar-expand-sm shadow navbar-light">

	<!-- toggle button on navbar collapse -->
	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>

	<!-- nav items -->
	<div class="collapse navbar-collapse justify-content-center" id="navbarContent">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item">
				<a class="nav-link" href="#aboutLink">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#portfolioLink">Portfolio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contactLink">Contact</a>
			</li>
		</ul>
	</div>
</nav>
<!-- END NAVBAR -->


<!-- MAIN CONTENT GRID -->
<a class="anchor" id="aboutLink"></a> <!-- give in page anchors padding to account for fixed header -->
<div class="container">
	<div id="aboutMeTitle" align="center">About Me</div>
	<div class="row"> <!-- ABOUT ME -->
		<div id="aboutMe" class="col p-3 shadow-lg">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div> <!-- END ABOUT ME -->



	<!-- PORTFOLIO -->
	<!-- 2 VIEWS FOR PORTFOLIO - CAROUSEL AND LIST -->
	<!-- FOR PREVIEWS IN CAROUSEL, CLICKING ON PREVIEW BRINGS UP MODAL -->
	<!-- LIST VIEW LISTS OUT TITLE, DESCRIPTION AND LINK -->

	<!-- ICONS ARE BUTTONS TO CONTROL VIEW -->
	<div id="portfolioTitle" class="text-center">Portfolio<i id="listViewButton" class="d-none fas fa-align-justify"></i><i id="carouselViewButton" class="fas fa-clone"></i>
		<a class="anchor" id="portfolioLink"></a> <!-- link for nav -->
	</div>
	<div class="text-center small view-text">Click to go to app</div><div class="d-none text-center small view-text">Click image for more info</div>
	<!-- CAROUSEL VIEW -->
	<div id="carouselView" class="carousel slide" data-ride="carousel"> <!-- carousel is hidden on mobile, will display on icon click -->
	    <div class="carousel-inner">
	    	<!-- calculator -->
		    <div class="carousel-item active">
		    	<a id="calculator" href="#" class="btn" data-toggle="modal" data-target="#modal-img-3">
					<img class="img-fluid img-thumbnail shadow" src="./images/calculator.png">
				</a>
				<p class="small" align="center"><em>Calculator</em></p>
		    </div>
	    	<!-- wiki viewer -->
		    <div class="carousel-item">
		    	<a id="wikiViewer" href="#" class="btn" data-toggle="modal" data-target="#modal-img-1">
					<img class="img-fluid img-thumbnail shadow" src="./images/wiki-viewer.png">
				</a>
				<p class="small" align="center"><em>Wiki Viewer</em></p>
		    </div>
		    <!-- twitch viewer -->
		    <div class="carousel-item">
		    	<a id="twitchViewer" href="#" class="btn" data-toggle="modal" data-target="#modal-img-2">
					<img class="img-fluid img-thumbnail shadow" src="./images/twitch-viewer.png">
				</a>
				<p class="small" align="center"><em>Twitch Viewer</em></p>
		    </div>
		    <!-- random quote -->
		    <div class="carousel-item">
		    	<a id="randomQuote" href="#" class="btn" data-toggle="modal" data-target="#modal-img-4">
					<img class="img-fluid img-thumbnail shadow" src="./images/random-quote.png">
				</a>
				<p class="small" align="center"><em>Random Quote</em></p>
		    </div>
	    </div>
	    <!-- carousel controls -->
	    <a class="carousel-control-prev" data-target="#carouselView" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" data-target="#carouselView" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	    </a>
    </div>
    <!-- END CAROUSEL VIEW -->


    <!-- LIST VIEW -->
    <div id="listView" class="mt-3">
    	<ul class="list-group">
    		<a href="https://codepen.io/cachin/full/yjZqpZ/" target="_blank" class="list-group-item list-group-item-action"><strong>Calculator</strong><br>A calculator with a random word button.</a>
			<a href="https://codepen.io/cachin/full/XqErOP/" target="_blank" class="list-group-item list-group-item-action"><strong>Wiki Viewer</strong><br>Search for Wikipedia articles.</a>
			<a href="https://codepen.io/cachin/full/qYYPRx/" target="_blank" class="list-group-item list-group-item-action"><strong>Twitch Viewer</strong><br>To see which of your favourite streamers are online.</a>
			<a href="https://codepen.io/cachin/full/jxPjGy/" target="_blank" class="list-group-item list-group-item-action"><strong>Random Quote Machine</strong><br>Just in case you need a good quote.</a>
		</ul>
    </div>
	<!-- END LIST VIEW -->


	<!-- MODALS FOR IMGS -->
	<!-- modal-img-1 for CALCULATOR -->
	<div class="modal fade" id="modal-img-3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel"><strong>Calculator</strong></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-fluid img-in-modal" src="./images/calculator.png">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center small">A calculator with a random word button.</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col d-flex">
	      				<a class="btn-block btn btn-outline-light" href="https://codepen.io/cachin/full/yjZqpZ/" target="_blank">Go To App</a>
	      			</div>
	      		</div>
	      	</div>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- modal-img-2 for TWITCH VIEWER -->
	<div class="modal fade" id="modal-img-2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel"><strong>Twitch Viewer</strong></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-fluid img-in-modal" src="./images/twitch-viewer.png">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center small">To see which of your favourite streamers are online.</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col d-flex">
	      				<a class="btn-block btn btn-outline-light" href="https://codepen.io/cachin/full/qYYPRx/" target="_blank">Go To App</a>
	      			</div>
	      		</div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- modal-img-3 for WIKI VIEWER -->
	<div class="modal fade" id="modal-img-1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel"><strong>Wiki Viewer</strong></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-fluid img-in-modal" src="./images/wiki-viewer.png">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center small">Search for Wikipedia articles.</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col d-flex">
	      				<a class="btn-block btn btn-outline-light" href="https://codepen.io/cachin/full/XqErOP/" target="_blank">Go To App</a>
	      			</div>
	      		</div>
	      	</div>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- modal-img-4 for RANDOM QUOTE -->
	<div class="modal fade" id="modal-img-4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel"><strong>Random Quote Machine</strong></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-fluid img-in-modal" src="./images/random-quote.png">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center small">Just in case you need a good quote.</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col d-flex">
	      				<a class="btn-block btn btn-outline-light" href="https://codepen.io/cachin/full/jxPjGy/" target="_blank">Go To App</a>
	      			</div>
	      		</div>
	      	</div>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- END PORTFOLIO -->





	<!-- CONTACT -->
	<div id="contactTitle" align="center">Contact</div>
	<div id="contact" class="row shadow-lg mt-2">

		<a class="anchor" id="contactLink"></a>
		<!-- on form submit, jquery sends data to email-form.php -->
		<div class="col-12 col-sm-6 mt-3" align="center">
			<p class="mt-2"><strong>Email Me</strong></p>
			<form action="./index.php#formMessage" method="post" id="email-form">
				<div class="form-group" align="left">
					<label class="small" for="name">Name</label>
					<input type="text" class="form-control" placeholder="Enter Name" name="name" required><br>
					<label class="small" for="email">Email</label>
					<input type="email" class="form-control" placeholder="Enter Email" name="email" required><br>
					<label class="small" for="subject">Subject</label>
					<input type="text" class="form-control" placeholder="Enter Subject" name="subject"><br>
					<label class="small" for="message">Message</label>
					<textarea class="form-control" name="message" rows="5" required></textarea>
					<div class="text-center"><button type="submit" name="submit" class="btn btn-outline-light mt-3">Send</button></div>
				</div>
			</form><br>
			<span id="formMessage">
				
			<!-- PHP FOR CONTACT FORM, when email is sent, php echoes success message inside this span -->
			<?php 

			if(isset($_POST["name"]) &&
			   isset($_POST["email"]) &&
			   isset($_POST["message"])){

				$to = 'cameron.a.chin@gmail.com';
				$subject = 'New message from portfolio!';
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = 'New message from ' . $name . ', ' . $email . '\n';
				// if subject is set -> add to message, else -> leave it out
				if(isset($_POST['subject'])){
					$optional_subject = $_POST['subject'];
					$message .= $optional_subject . '\n';
				} else {
					$message .= $_POST['message'];
				}
				// send mail!
				mail($to, $subject, $message);
				echo "Thank you for your message, I'll get back to you as soon as I can!";
			}

			?>

			</span>
		</div>

		<div id="links" class="col-12 col-sm-4 offset-sm-1" align="center">
			<p><strong>Links</strong></p>
			<ul class="list-group">
				<a href="https://github.com/c-a-chin" target="_blank" class="list-group-item list-group-item-action">Github</a>
				<a href="https://codepen.io/cachin/" target="_blank" class="list-group-item list-group-item-action">Codepen</a>
				<a href="https://www.linkedin.com/in/cameron-chin-b0098b161/" target="_blank" class="list-group-item list-group-item-action">LinkedIn</a>
			</ul><br><br>
		</div>
	</div> 
	<!-- END CONTACT -->






</div>
<!-- END MAIN CONTENT GRID -->

<div class="container"><br><br><br></div> <!-- to add some margin at bottom of page -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="./scripts/scripts.js"></script>
</body>
</html>