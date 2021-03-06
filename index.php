<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anthony Nguyen</title>

	<!-- Reset CSS -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">

	<!-- Latest compiled and minified Materialize CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  	<!-- Icons -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Page Piling -->
	<link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" />

	<!-- Google Fonts Raleway -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- Google Fonts Quicksand -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

	<!-- Animations -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Google Analytics -->
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89112202-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
	<nav>
		<div class="nav-wrapper container">
			<a href="#page1" class="brand-logo">Anthony Nguyen</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse">
				<i class="material-icons">menu</i>
			</a>
			<ul id="menu" class="right hide-on-med-and-down pileMenu">
				<li data-menuanchor="page1" class="active">
					<a href="#page1">About</a>
				</li>
				<li data-menuanchor="page2">
					<a href="#page2">Skills</a>
				</li>
				<li data-menuanchor="page3">
					<a href="#page3">Projects</a>
				</li>
				<li data-menuanchor="page4">
					<a href="#page4">Contact</a>
				</li>
			</ul>

			<ul class="side-nav" id="mobile-demo">
		        <li data-menuanchor="page1">
					<a href="#page1">About</a>
				</li>
				<li data-menuanchor="page2">
					<a href="#page2">Skills</a>
				</li>
				<li data-menuanchor="page3">
					<a href="#page3">Projects</a>
				</li>
				<li data-menuanchor="page4">
					<a href="#page4">Contact</a>
				</li>
				
				<li class="row center profile2">
					<img src="img/profile.png" alt="profile" class="profile col s6 offset-s3 m4 offset-m4">
				</li>
		  	</ul>
		</div>
	</nav>

	<div id="pagepiling">
		<div class="section" id="section1">
			<div class="container">
				<div class="row">
					<div class="tricker">
						<h2>Hello</h2>
						<h2>My name is Anthony Nguyen</h2>
						<h2>and I want to be</h2>
						<h2>The very best</h2>
						<h2>Like no one ever was</h2>

						<h2>To get jobs Is my real test</h2>
						<h2>Employment is my cause</h2>

						<h2>I will travel</h2>
						<h2>Across downtown</h2>
						<h2>Searching far and wide</h2>

						<h2>Each interview</h2>
						<h2>To understand</h2>
						<h2>The reason that I tried</h2>

						<h2>Interviews!</h2>
						<h2>Gotta pass them all</h2>
						<h2>There's too many</h2>
						<h2>I'm breaking down mentally</h2>

						<h2>Interviews!</h2>
						<h2>Oh, please make this end</h2>
						<h2>Let me sleep and just pretend</h2>

						<h2>Interviews!</h2>
						<h2>Gotta pass them all</h2>
						<h2>My face so blue</h2>
						<h2>Don't really know what to do</h2>

						<h2>You call me and I'll call you</h2>
						<h2>In-ter-views</h2>
						<h2>Gotta pass them all</h2>
						<h2>Gotta pass them all</h2>
						<h2>Interviews!</h2>
						<h2>*Please Hire Me*</h2>
					</div>
					<div class="subline"></div>
					<p class="col s12 m10 offset-m1 aboutText white-text">
                        Hello and welcome to my site. My name is Anthony Nguyen and I deal with front end as well as back end web development. I love to break things apart and if the website name didn't already give it away, I also have an unhealthy obsession with puns.
                        <br><br>
                        I am currently searching for any internships or entry level positions in the field. Please feel free to take a look around my site. If anything, at least scroll down and look at the chart that I made using d3 and 4 sessions of intensive therapy.
                    </p>
				</div>
			</div>
			<img src="img/hand2.png" alt="hand" class="hand">
		</div>

		<div class="section" id="section2">
			<div class="container">
				<div class="row center">
					<h2>SKILLS</h2>
					<!-- <hr> -->
					<a class="btn btn-large waves-effect waves-light blue" id="front">Front End</a>
					<a class="btn btn-large waves-effect waves-light red" id="back">Back End</a>
					<div id="charts">
						<div id="chart" class="col s12 center"></div>
						<div id="chart2" class="col s12 center"></div>
					</div>
				</div>
			</div>
			<img src="img/hand2.png" alt="hand" class="hand2">
			<img src="img/hand.png" alt="hand" class="hands">
		</div>

		<div class="section" id="section3">
			<div class="container">
				<div class="row center">
					<h2 class="center white-text">PROJECTS</h2>
					<!-- <hr> -->
					<div class="carousel col m12">
						<div class="carousel-item">
							<a target="_blank" href="projects/haikyuu/index.html">
								<img src="img/haikyuu.png" alt="Haikyuu">
							</a>
							<a target="_blank" href="projects/haikyuu/index.html" class="btn btn-large waves-effect waves-light orange black-text">Website Link</a>
						</div>
						<div class="carousel-item">
							<a target="_blank" href="projects/recipe/index.php">
								<img src="img/recipe.png" alt="Recipe">
							</a>
							<a target="_blank" href="projects/recipe/index.php" class="btn btn-large waves-effect waves-light red white-text">Website Link</a>
						</div>
						<div class="carousel-item">
							<a target="_blank" href="projects/poke/index.html">
								<img src="img/poke.png" alt="Chews">
							</a>
							<a target="_blank" href="projects/poke/index.html" class="btn btn-large waves-effect waves-light blue white-text">Website Link</a>
						</div>
						<div class="carousel-item">
							<a target="_blank" href="projects/chews/index.html">
								<img src="img/chews.png" alt="Chews">
							</a>
							<a target="_blank" href="projects/chews/index.html" class="btn btn-large waves-effect waves-light black white-text">Website Link</a>
						</div>
						<div class="carousel-item">
							<a target="_blank" href="projects/date/signup.html">
								<img src="img/date.png" alt="Date">
							</a>
							<a target="_blank" href="projects/date/signup.html" class="btn btn-large waves-effect waves-light grey black-text">Website Link</a>
						</div>
						<div class="carousel-item">
							<a target="_blank" href="http://vietgardenorlando.com">
								<img src="img/viet.png" alt="Viet">
							</a>
							<a target="_blank" href="http://vietgardenorlando.com" class="btn btn-large waves-effect waves-light green black-text">Website Link</a>
						</div>
						<div class="carousel-item">
							<a target="_blank" href="projects/jif/index.html">
								<img src="img/jif.png" alt="Jif">
							</a>
							<a target="_blank" href="projects/jif/index.html" class="btn btn-large waves-effect waves-light blue black-text">Website Link</a>
						</div>
					</div>
				</div>
			</div>
			<img src="img/hand2.png" alt="hand" class="hand3">
			<img src="img/hand.png" alt="hand" class="hands2">
		</div>

		<div class="section" id="section4">
			<div class="container">
				<div class="row">
					<h2 class="center">CONTACT</h2>
					<form action="index.php" method="post" class="col s12" id="mail">
			            <div class="row">
			                <div class="input-field col s12 m8 offset-m2">
			                    <i class="material-icons prefix">account_circle</i>
			                    <input type="text" id="name" class="validate" name="name" required>
			                    <label for="name">Name</label>
			                </div>
			            </div>
			            <div class="row">
			                <div class="input-field col s12 m8 offset-m2">
			                    <i class="material-icons prefix">subject</i>
			                    <input type="text" id="subject" class="validate" name="subject" required>
			                    <label for="subject">Subject</label>
			                </div>
			            </div>
			            <div class="row">
			                <div class="input-field col s12 m8 offset-m2">
			                    <i class="material-icons prefix">comment</i>
			                    <textarea id="message" class="materialize-textarea" name="message" required></textarea>
			                    <label for="message">Message</label>
			                </div>
			            </div>
			            <div class="row">
			                <div class="center">
			                    <button class="btn-large home-btn waves-effect waves-light white-text bold black" type="submit" name="action">
			                        Submit
			                        <i class="material-icons right">send</i>
			                    </button>
			                </div>
			            </div>
			        </form>
				</div>
			</div>
			<img src="img/hand.png" alt="hand" class="hands3">
		</div>
	</div>

	<!--  jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <!-- Latest compiled and minified Materialize JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

  	<!-- Init -->
  	<script src="js/init.js"></script>

  	<!-- D3 -->
  	<script src="https://d3js.org/d3.v3.min.js"></script>

  	<!-- Custom D3 -->
  	<script src="js/d3_skills.js"></script>

  	<!-- Page Piling -->
  	<script src="js/jquery.pagepiling.js"></script>

  	<!-- Page Piling2 -->
  	<script src="js/pagepile.js"></script>

  	<!-- Page Piling2 -->
  	<script src="js/ticker.js"></script>

  	<!-- Custom jQuery -->
  	<script src="js/jquery.js"></script>

  	<!-- Custom Ajax -->
  	<script src="js/ajax.js"></script>
</body>
</html>