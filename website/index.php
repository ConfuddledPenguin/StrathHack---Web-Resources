<html>
<head>
	<title>StrathHack - StrathTech</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Lets clear out the styles -->
	<link rel="stylesheet" href="css/reset.css">

	<!-- Any libs -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,700" rel="stylesheet" type="text/css">

	<!-- And now add our styles -->
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="contianer">
				<div class="navbar-header">
			    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			    		<span class="sr-only">Toggle navigation</span>
			    		<span class="icon-bar"></span>
			    		<span class="icon-bar"></span>
			    		<span class="icon-bar"></span>
			    	</button>
			    	<ul>
			    		<li><a class="navbar-brand" href="https://strathtech.co.uk" data-hover="StrathTech">StrathTech</a></li>
			    	</ul>
			    </div>
			   	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    	<ul class="nav navbar-nav">
			    		<li><a href="#about" data-hover="About">About</a></li>
			    		<li><a href="#timeline" data-hover="Timeline">Timeline</a></li>
			    		<li><a href="#location" data-hover="Location">Location</a></li>
			    		<li><a href="#sponsers" data-hover="Sponsors">Sponsors</a></li>
			    		<li><a href="#signup" data-hover="Sign Up">Sign Up</a></li>
			    	</ul>
			    </div>
			</div>
		</nav>
		<div class="header-content">
			<h1>StrathHACK</h1>
			<h2>Some inspirational bullshit</h2>
		</div>
		
		
	</header>
	<main>
		<a name="about"></a>
		<section class="tile">
			<div class="tilecontent">
				<h3>A Programming Marathon for Students</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere pellentesque viverra. Fusce pretium mauris sit amet ligula viverra, sit amet efficitur leo interdum. Curabitur egestas nisl odio, rhoncus sollicitudin erat rutrum gravida. Aliquam maximus, enim ac accumsan hendrerit, massa risus cursus eros, ut elementum nisi sem vel nibh. Morbi porta ultrices vulputate. Duis placerat est a ligula accumsan, sed commodo turpis elementum. Vestibulum lacus velit, maximus et sem eget, malesuada dictum elit.

Donec facilisis ultricies tellus. Pellentesque eu arcu turpis. Fusce rutrum ornare sapien eget molestie. Sed tincidunt ex ante, sit amet pellentesque sem semper in. Duis iaculis sapien eget leo dapibus sodales. Nunc mattis ex arcu, vel semper libero congue ut. Praesent feugiat pellentesque sapien, ac suscipit nulla porttitor vel.</p>
			</div>
		</section>
		<a name="timeline"></a>
		<section class="tile" id="timeline">
			<div class="tilecontent">
				<h3>Date and Timeline</h3>
				<p>StrathHACK takes place on the 20th of February and continues into the 21st.</p>
				<table>
					<tr>
						<td>12:00</td>
						<td>Project Briefings</td>
					<tr>
						<td>13:00</td>
						<td>Late Lunch &#38 Team Forming</td>
					<tr>
						<td>14:00</td>
						<td>Coding Starts</td>
					<tr>
						<td>18:00</td>
						<td>Dinner</td>
					<tr>
						<td>22:00</td>
						<td>Break game/talks</td>
					<tr>
						<td>00:00</td>
						<td>Midnight Snacks</td>
					<tr>
						<td>06:30</td>
						<td>Breakfast</td>
					<tr>
						<td>12:00</td>
						<td>Coding Ends</td>
					<tr>
						<td>12:00</td>
						<td>Lunch and Assessing of Groups</td>
					<tr>
						<td>14:00</td>
						<td>Presentations &#38 Closing</td>
					<tr>
						<td>15:30</td>
						<td>Tidying &#38 Departure</td>
				</table>
			</div>
		</section>
		<a name="location"></a>
		<section class="tile" id="location">
			<div class="tilecontent">
				<h3>Location</h3>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>StrathHACK is held at The University of Strathclyde, Glasgow.</p>
					</div>
					<!-- <div class="col-md-6">
						<a href="https://www.google.co.uk/maps/place/Strathclyde+University+Architecture+Building/@55.8618362,-4.2501143,15z/data=!4m2!3m1!1s0x0:0x17e79326b6f75df4"><img src="https://maps.googleapis.com/maps/api/staticmap?center=55.8618999,-4.2423349&zoom=14&size=800x600&markers=color:red%7Clabel:C%7C55.8618993,-4.2423345" alt="Location"></a>
					</div> -->
					<div class="col-md-6">
						<div id='google-map' style="height: 350px;"></div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<a name="sponsers"></a>
		<section class="tile" id="sponsor">
			<div class="tilecontent">
				<h3>Sponsors</h3>
			<div class="container">
				<div class="row">
					<div class="col-md-6 imgholder">
						<img src="http://dummyimage.com/500x200/000/777" alt="Sponsor Goes Here">
					</div>
					<div class="col-md-6 imgholder">
						<img src="http://dummyimage.com/500x200/000/777" alt="Sponsor Goes Here">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 imgholder">
						<img src="http://dummyimage.com/300x125/000/777" alt="Sponsor Goes Here">
					</div>
					<div class="col-md-4 imgholder">
						<img src="http://dummyimage.com/300x125/000/777" alt="Sponsor Goes Here">
					</div>
					<div class="col-md-4 imgholder">
						<img src="http://dummyimage.com/300x125/000/777" alt="Sponsor Goes Here">
					</div>
				</div>
			</div>
			</div>
		</section>
		<a name="signup"></a>
		<section class="tile" id="signup">
			<div class="tilecontent">
				<h3>Interested? Sign Up</h3>
				<form id="signupform">
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
					</div>
					<div class="form-group">
						<label for="email" >Email address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address" required>
					</div>
					<div class="form-group">
						<label for="number">Phone Number</label>
						<input type="number" class="form-control" id="number" name="number" placeholder="Your Phone Number" required>
					</div>
					<div class="form-group">
						<label for="university">University</label>
						<input type="text" class="form-control" id="university" name="university" placeholder="Your University" required>
					</div>
					<button class="btn btn-default" type="button" id="signup">Register</button>
				</form>
			</div>
		</section>
	</main>
	<footer class="clearFix">
		<ul id="contact">
			<li><a id="email" href="mailto:strathhack@strathtech.co.uk"></a></li>
			<li><a id="twitter" href="https://twitter.com/strathtech"></a></li>
			<li><a id="facebook" href="https://www.facebook.com/StrathTech"></a></li>
			<li><a id="github" href="https://github.com/StrathTech"></a></li>
			<div class="spacer" style="clear: both;"></div>
		</ul>
		<ul id="info">
			<li>&copy <?php echo date("Y"); ?> <a href="https://www.strathtech.co.uk/">StrathTech</a></li>
			<li><a href="http://www.strathstudents.com/">strathstudents</a></li>
		</ul>
		<div class="spacer" style="clear: both;"></div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBlWdYVomePM23RcDikarZvZqHHwkr8nJE&extension=.js'></script>

	<script src="js/style.js"></script>
	<script type="text/javascript" src="js/map.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>