<?php

session_start();

require_once 'controller/LoginController.php';
$logCtrler = new LoginController;

$logCtrler->checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Login </title>
		 <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body style="background: url(images/ka.jpg);">
		<?php

			if(!empty($_POST['username']) && !empty($_POST['password'])) 
			{
				$logCtrler->loginFunction($_POST['username'], $_POST['password']);
			}

		?>
		<div class="LoginForm">
			<img src="images/FindJob.jpg" class = "FindJob">
			<h1> Login</h1>			
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<p> Username</p>
				<input type="text" name ="username" placeholder="Enter Username" required="required">
				<p> Password</p>
				<input type="password" name="password" placeholder="Enter Password" required="required">
				<input type = "submit" value="Login"><br>
				<a href="#"> Lost your password?</a><br>
				<a href="#"> Don't have an account?</a>
			</form>
		
		</div>
	</body>
</html>