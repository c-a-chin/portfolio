<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./style.css">
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
	<div class="mt-5 container-fluid">
		<div id="projectsTitle" align="center">Portfolio</div>
		<p class="text-center lead"><em>Click image for more info</em></p>
		<!-- first row of imgs -->
		<div class="row mt-3">
			<div class="col-sm-12 col-md-6">
				<a href="#" class="btn" data-toggle="modal" data-target="#modal-img-1">
					<img class="img-fluid img-thumbnail shadow-lg" src="https://images.pexels.com/photos/923649/pexels-photo-923649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</a>
			</div>
			<div class="col-sm-12 col-md-6">
				<a href="#" class="btn" data-toggle="modal" data-target="#modal-img-2">
					<img class="img-fluid img-thumbnail shadow-lg" src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Google_Videos_Homepage_Search_Engine_Screenshot.png">
				</a>
			</div>
		</div>
		<!-- second row of imgs -->
		<div class="row mt-3">
			<div class="col-sm-12 col-md-6 mt-2">
				<a href="#" class="btn" data-toggle="modal" data-target="#modal-img-3">
					<img class="img-fluid img-thumbnail shadow-lg" src="https://theproductguy.files.wordpress.com/2013/01/reddit-gif-scaled-1000.jpg">
				</a>
			</div>
			<div class="col-sm-12 col-md-6 mt-2">
				<a href="#" class="btn" data-toggle="modal" data-target="#modal-img-4">
					<img class="img-fluid img-thumbnail shadow-lg" src="http://1.bp.blogspot.com/-alWzGL6_b_U/UsRTthrNNiI/AAAAAAAAMps/wjvmyo0BdTA/s1600/Old+YouTube+homepage.png">
				</a>
			</div>
		</div>
	</div>



	<!-- MODALS FOR IMGS -->
	<!-- Modal img-1 -->
	<div class="modal fade" id="modal-img-1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel">App Title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-in-modal" src="https://images.pexels.com/photos/923649/pexels-photo-923649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center">short description of app...</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col-4 d-flex">
	      				<!-- empty -->
	      			</div>
	      			<div class="col-4 d-flex">
	      				<a class="btn-block btn btn-info" href="#" target="_blank">Link To App</a>
	      			</div>
	      			<div class="col-4 d-flex justify-content-end">
	      				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
	      			</div>
	      		</div>
	      	</div>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal img-2 -->
	<div class="modal fade" id="modal-img-2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel">Google</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-in-modal" src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Google_Videos_Homepage_Search_Engine_Screenshot.png">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center">Search engine that knows about over 130 trillion pages on the internet!</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col-4 d-flex">
	      				<!-- empty -->
	      			</div>
	      			<div class="col-4 d-flex">
	      				<a class="btn-block btn btn-info" href="https://www.google.com" target="_blank">Link To Google</a>
	      			</div>
	      			<div class="col-4 d-flex justify-content-end">
	      				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
	      			</div>
	      		</div>
	      	</div>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal img-3 -->
	<div class="modal fade" id="modal-img-3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel">Reddit</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-in-modal" src="https://theproductguy.files.wordpress.com/2013/01/reddit-gif-scaled-1000.jpg">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center">A sure fire way to lose all productivity.</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col-4 d-flex">
	      				<!-- empty -->
	      			</div>
	      			<div class="col-4 d-flex">
	      				<a class="btn-block btn btn-info" href="https://www.reddit.com" target="_blank">Link To Reddit</a>
	      			</div>
	      			<div class="col-4 d-flex justify-content-end">
	      				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
	      			</div>
	      		</div>
	      	</div>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal img-4 -->
	<div class="modal fade" id="modal-img-4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLabel">Youtube</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img class="img-in-modal" src="http://1.bp.blogspot.com/-alWzGL6_b_U/UsRTthrNNiI/AAAAAAAAMps/wjvmyo0BdTA/s1600/Old+YouTube+homepage.png">
	      </div>
	      <div class="modal-footer">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col">
	      				<p class="text-center">Everyone's favourite music player.</p>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col-4 d-flex">
	      				<!-- empty -->
	      			</div>
	      			<div class="col-4 d-flex">
	      				<a class="btn-block btn btn-info" href="https://www.youtube.com" target="_blank">Link To Youtube</a>
	      			</div>
	      			<div class="col-4 d-flex justify-content-end">
	      				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
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
	<div class="row">
		<div id="contact" class="col-12 col-sm-6 shadow-lg mt-3" align="center">
			<h4 class="mt-2">Email Me</h4>
			<form>
				<div class="form-group" align="left">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" placeholder="Enter Name"><br>
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Enter Email"><br>
					<label for="message">Message</label>
					<textarea id="message" class="form-control" rows="5"></textarea>
					<div class="text-center"><input type="submit" class="mt-3"></div>
				</div>
			</form>
		</div>

		<div class="col-12 col-sm-4 offset-sm-2 mt-3" align="center">
			<h4>Links</h4>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="./scripts.js"></script>
</body>
</html>