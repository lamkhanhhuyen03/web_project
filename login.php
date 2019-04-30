<html>
	<head>
		<title> Login </title>
		 <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body style="background: url(images/ka.jpg);">
		<div class="LoginForm">
			<img src="images/FindJob.jpg" class = "FindJob">
			<h1> Login</h1>			
			<form action="process.php" method="POST">
				<p> Username</p>
				<input type="text" name ="username" placeholder="Enter Username">
				<p> Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<input type = "submit" value="Login"><br>
				<a href="#"> Lost your password?</a><br>
				<a href="#"> Don't have an account?</a>
			</form>
		
		</div>
	</body>
</html>