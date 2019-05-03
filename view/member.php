<html>
	<head>
		<title> Login </title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
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

			<div class="mx-auto order-0">
				<a class="navbar-brand mx-auto" href="#">
					<img src="../images/brandNavbar.jpg" width="30" height="30" class="d-inline-block align-top" alt="">    Home
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">All Jobs</a>
					</li>

					<li class="nav-item">
						<a class="nav-link">Hello</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" onclick="fbLogoutUser()">Đăng xuất</a>
					</li>
				</ul>
			</div>

		</nav>

	</body>

</html>