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
		<?php

			if(!empty($_POST['username']) && !empty($_POST['password'])&& !empty($_POST['repassword'])) 
			{ 
				//$logCtrler->loginFunction($_POST['username'], $_POST['password']);
				$logCtrler->Register($_POST['username'], $_POST['password'], $_POST['repassword']);
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
				<p> Password Again</p>
				<input type="password" name="repassword" placeholder="Enter Password Again" required="required">
				<input type = "submit" value="Submit"><br>
				<?php
					if(isset($_GET['msg']))
				    {
				        $Message = "Error";
				        echo '<h10 class = 
				        "text-danger">'.$Message.'<h10>'.'<br>';
				    }
				    /*else{
				        $Message = "UserName is exist";
				        echo '<h10 class = 
				        "text-danger">'.$Message.'<h10>'.'<br>';
				    }*/
				?>
			</form>
		</div>
	</body>
</html>