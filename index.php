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
<body>
<!-- NAVBAR -->
<nav class="navbar fixed-top navbar-expand-sm shadow mx-3 navbar-light bg-light">

	<!-- toggle button on navbar collapse -->
	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>

	<!-- nav items -->
	<div class="collapse navbar-collapse justify-content-center" id="navbarContent">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Portfolio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
			</li>
		</ul>
	</div>
</nav>
<!-- END NAVBAR -->


<!-- MAIN CONTENT GRID -->
<div class="container">
	<div id="aboutMeTitle" align="center">About Me</div>
	<div class="row"> <!-- ABOUT ME -->
		<div id="aboutMe" class="col p-3 shadow-lg bg-light">
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
	<div id="projectsTitle" class="text-center">Portfolio<i id="listView" class="fas fa-align-justify"></i><i id="blockView" class="d-none fas fa-clone"></i></div>
	<div class="text-center small">Click image for more info</div>
	<!-- CAROUSEL VIEW -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	    <div class="carousel-inner">
	    	<!-- wiki viewer -->
		    <div class="carousel-item active">
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
		    <!-- calculator -->
		    <div class="carousel-item">
		    	<a id="calculator" href="#" class="btn" data-toggle="modal" data-target="#modal-img-3">
					<img class="img-fluid img-thumbnail shadow" src="./images/calculator.png">
				</a>
				<p class="small" align="center"><em>Calculator</em></p>
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
	    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	    </a>
    </div>
    <!-- END CAROUSEL VIEW -->


    <!-- LIST VIEW -->

	<!-- END LIST VIEW -->


	<!-- MODALS FOR IMGS -->
	<!-- modal-img-1 for WIKI VIEWER -->
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
	        <img class="img-fluid" src="./images/wiki-viewer.png">
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
	      				<a class="btn-block btn btn-outline-dark" href="https://codepen.io/cachin/full/XqErOP/" target="_blank">Go To App</a>
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
	        <img class="img-fluid" src="./images/twitch-viewer.png">
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
	      				<a class="btn-block btn btn-outline-dark" href="https://codepen.io/cachin/full/qYYPRx/" target="_blank">Go To App</a>
	      			</div>
	      			
	      		</div>
	      	</div>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- modal-img-3 for CALCULATOR -->
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
	        <img class="img-fluid" src="./images/calculator.png">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center small">Just a regular ol' calculator, with a random word button.</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col d-flex">
	      				<a class="btn-block btn btn-outline-dark" href="https://codepen.io/cachin/full/yjZqpZ/" target="_blank">Go To App</a>
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
	        <img class="img-fluid" src="./images/random-quote.png">
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
	      				<a class="btn-block btn btn-outline-dark" href="https://codepen.io/cachin/full/jxPjGy/" target="_blank">Go To App</a>
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
	<div id="contact" class="row shadow-lg bg-light mt-2">
		<div class="col-12 col-sm-6 mt-3" align="center">
			<p class="lead mt-2"><strong>Email Me</strong></p>
			<form>
				<div class="form-group" align="left">
					<label class="small" for="name">Name</label>
					<input type="text" class="form-control" id="name" placeholder="Enter Name"><br>
					<label class="small" for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Enter Email"><br>
					<label class="small" for="subject">Subject</label>
					<input type="text" class="form-control" id="subject" placeholder="Enter Subject"><br>
					<label class="small" for="message">Message</label>
					<textarea id="message" class="form-control" rows="5"></textarea>
					<div class="text-center"><button type="submit" class="btn btn-outline-dark mt-3 ">Send</div>
				</div>
			</form>
		</div>

		<div id="links" class="col-12 col-sm-4 offset-sm-1" align="center">
			<p class="lead"><strong>Links</strong></p>
			<ul class="list-group">
				<a href="" target="_blank" class="list-group-item list-group-item-action">Github</a>
				<a href="" target="_blank" class="list-group-item list-group-item-action">Codepen</a>
				<a href="" target="_blank" class="list-group-item list-group-item-action">Stack Overflow</a>
			</ul>
		</div>
	</div> 
	<!-- END CONTACT -->




</div>
<!-- END MAIN CONTENT GRID -->

<div class="container"><br><br><br></div> <!-- to add some margin at bottom of page -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="./scripts/scripts.js"></script>
</body>
</html>