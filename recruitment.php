<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Login </title>
		<link rel="stylesheet" type="text/css" href="css/recruitmentStyle.css">
		<!--===============================================================================================-->
  		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  		<!--===============================================================================================-->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  		<!--===============================================================================================-->
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<!--===============================================================================================-->
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	  	<!--===============================================================================================-->
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	  	<!--===============================================================================================-->
	</head>
	
	<body style="background: url(images/ka.jpg);">
		<div class = "LoginForm">
			<img src="images/FindJob.jpg" class = "FindJob">
			<h1> Recruitment</h1>	

			<form action="temptJobs.php" method="POST">
				<p> Technology
					<input type="text" name ="technology" required="required">
				</p>
				<p> Salary
					<input type="text" name ="salary" required="required">
				</p>
				<p> Description</br>
					<textarea type="text" name ="description" required="required" cols="35">
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
		</div>
	</body>
</html>