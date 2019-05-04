
<!DOCTYPE html>
<html>
<head>
	<title> FIND JOB </title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<!-- Image and text -->
	<script>

	  		//[1] Load necesaary part
	  		window.fbAsyncInit = function() {
	  			FB.init({
	  				appId      : '2070975816535430',
	  				cookie     : true,
	  				xfbml      : true,
	  				version    : 'v3.3'
	  			});
	  		};

	  		(function(d, s, id){
	  			var js, fjs = d.getElementsByTagName(s)[0];
	  			if (d.getElementById(id)) {return;}
	  			js = d.createElement(s); js.id = id;
	  			js.src = "https://connect.facebook.net/en_US/sdk.js";
	  			fjs.parentNode.insertBefore(js, fjs);
	  		}(document, 'script', 'facebook-jssdk'));
	  		//log out App
	  		function fbLogoutUser() {
	  			FB.getLoginStatus(function(response) {
	  				console.log(response.status);
	  				if (response && response.status === 'connected') {
	  					FB.logout(function(response) {
	  						window.location="../login.php";
	  					});
	  				}else{
	  					window.location="../controller/Logout.php";
	  				}
	  			});
	  		}

	  	</script>
	  	<nav class="navbar navbar-expand-md navbar-light bg-light">

	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  			<ul class="navbar-nav mr-auto">
	  				<li class="nav-item">
	  					<a class="nav-link active" href="member.php">Home</a>
	  				</li>
	  				<li class="nav-item dropdown">
	  					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  						Position
	  					</a>
	  					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	  						<a class="dropdown-item" href="#">Manager Project</a>
	  						<a class="dropdown-item" href="#">Human Resources</a>
	  						<a class="dropdown-item" href="#">Developer</a>
	  					</div>
	  				</li>
	  				<li class="nav-item dropdown">
	  					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  						Skill
	  					</a>
	  					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	  						<a class="dropdown-item" href="#">iOS</a>
	  						<a class="dropdown-item" href="#">Java</a>
	  						<a class="dropdown-item" href="#">Python</a>
	  						<a class="dropdown-item" href="#">Front-End</a>
	  						<a class="dropdown-item" href="#">Back-End</a>
	  					</div>
	  				</li>
	  			</ul>
	  			<ul class="navbar-nav ml-auto">

	  				<li class="nav-item">
	  					<a class="nav-link">Hello</a>
	  				</li>

	  				<li class="nav-item">
	  					<a class="nav-link" href ="javascript:void(0)"onclick="fbLogoutUser()">Sign Out</a>
	  				</li>
	  			</ul>

	  		</div>
	  	</nav>
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  		<ol class="carousel-indicators">
	  			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  		</ol>
	  		<div class="carousel-inner">
	  			<div class="carousel-item active">
	  				<img class="d-block w-100" src="../images/brandNavbar.jpg" alt="First slide">
	  			</div>
	  			<div class="carousel-item">
	  				<img class="d-block w-100" src="../images/brandNavbar.jpg" alt="Second slide">
	  			</div>
	  			<div class="carousel-item">
	  				<img class="d-block w-100" src="../images/brandNavbar.jpg" alt="Third slide">
	  			</div>
	  		</div>
	  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  			<span class="sr-only">Previous</span>
	  		</a>
	  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  			<span class="carousel-control-next-icon" aria-hidden="true"></span>
	  			<span class="sr-only">Next</span>
	  		</a>
	  	</div>
	  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  	<!--===============================================================================================-->
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  	<!--===============================================================================================-->
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  	<!--===============================================================================================-->
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  	<!--===============================================================================================-->
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  </body>

	  </html>