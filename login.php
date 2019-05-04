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
		<script>

  		//[1] Load necesaary part
	  		window.fbAsyncInit = function() {
	  			FB.init({
	  				appId      : '2070975816535430',
	  				cookie     : true,
	  				xfbml      : true,
	  				version    : 'v3.3'
	  			});
	  			//Check status login
	  			FB.getLoginStatus(function(response) {
	  			    statusChangeCallback(response);
	  			});

	  		};

	  		(function(d, s, id){
	  			var js, fjs = d.getElementsByTagName(s)[0];
	  			if (d.getElementById(id)) {return;}
	  			js = d.createElement(s); js.id = id;
	  			js.src = "https://connect.facebook.net/en_US/sdk.js";
	  			fjs.parentNode.insertBefore(js, fjs);
	  		}(document, 'script', 'facebook-jssdk'));

	  		//[2] Handle login
	  		function statusChangeCallback(response){
	  			//Login success fb and app
	  			if(response.status === 'connected'){
	  				testAPI();
	  				window.location="view/member.php";
	  			}else if(response.status === 'not_authorized'){
	  			//Login success fb but fail to login app
	  				console.log('not authenticated');
	  			}else{
	  			//Fail to login fb
	  				console.log('not login fb');
	  			}
	  		}

	  		function checkLoginState() {
	  		  FB.getLoginStatus(function(response) {
	  		    statusChangeCallback(response);
	  		  });
	  		}

	  		//[3] Add database
	  		function testAPI() {
			    console.log('Welcome!  Fetching your information.... ');
			    FB.api('/me', function(response) {
			      console.log('Successful login for: ' + response.name +' ' + response.id);
			      window.onload = function what(){
			     	 document.getElementById('status').innerHTML =
			        	'Thanks for logging in, ' + response.name + '!';
			        };
			    });
			}
  		</script>
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
				<?php
					if(isset($_GET['msg']))
				    {
				        $Message = "Uncorrect Username or Password";
				        echo '<h10 class = "text-danger">'.$Message.'<h10>'.'<br>';
				    }
				?>
				<fb:login-button 
  					id="fb-btn"
  					scope="public_profile,email"
  				  	onlogin="checkLoginState();">
  				</fb:login-button>
				<a href="#"> Don't have an account?</a>
			</form>
		</div>
	</body>
</html>