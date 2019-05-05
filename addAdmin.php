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
	  	<form action="admin.php" method="POST">
				<p> Technology
					<input type="text" name ="technology" required="required">
				</p>
				<p> Salary
					<input type="text" name ="salary" required="required">
				</p>
				<p> Description
					<textarea type="text" name ="description" required="required" style ='min-width:500px; max-width:100%;min-height:50px;height:100%;width:100%;'>
					</textarea>
				</p>
				<p> Address
					<input type="text" name ="address"  required="required">
				</p>
				<p> Phone number
					<input type="text" name ="phonenumber"  required="required">
				</p>
				<input type = "submit" value="Add"><br>
		</form>
		<script > 
			$('textarea')
			  .focus(function() { $(this).css("background", "none") })
			  .blur(function() { if ($(this)[0].value == '') { $(this).css("background", "url(images/benice.png) center center no-repeat") } });
		</script>
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