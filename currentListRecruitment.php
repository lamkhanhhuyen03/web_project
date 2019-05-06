<?php

session_start();
if (empty($_SESSION['user_id']))
{
	header('location: login.php');
}
if($_SESSION['user_role'] == 'member'){
	header('location: index1.php');
}
require_once 'model/ManagerAdmin.php';

$logCtrler = new ManagerAdmin;

?>	
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
	<script >
		function onclick(){

		}
	</script>
	<?php
	if(!empty($_POST['technology']) && !empty($_POST['salary']) && !empty($_POST['description']) && !empty($_POST['address']) && !empty($_POST['phonenumber'])) {

		$logCtrler->addDatabase($_POST['technology'], $_POST['salary'],$_POST['description'], $_POST['address'],$_POST['phonenumber']);
		header('Location: admin.php');
	}
	?>
	<nav class="navbar navbar-expand-md navbar-light bg-light">

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link active" href="admin.php">Home</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" href ="currentListRecruitment.php">Recruitment List</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href ="controller/Logout.php">Sign Out</a>
				</li>
			</ul>

		</div>
	</nav>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">STT</th>
				<th scope="col">Technology</th>
				<th scope="col">Salary</th>
				<th scope="col">Decription</th>
				<th scope="col">Address</th>
				<th scope="col">Number</th>
			</tr>
		</thead>
		<?php
		/*if(!empty($_POST['technology']) && !empty($_POST['salary']) && !empty($_POST['description']) && !empty($_POST['address']) && !empty($_POST['phonenumber'])) {*/
			$result1 = $logCtrler -> gettempJobs();
			  	/*foreach($result1 as $result){
				  	$id = $result['id'] + 1; 
				  	$technology = $result['technology']; 
				  	$salary = $result['salary']; 
				  	$decription = $result['decription']; 
				  	$address = $result['address']; 
				  	$phonenumber = $result['phonenumber']; 
				  echo"
				  	<tbody>
				    <tr>
				      <th scope='row'>{$id}</th>
				      <td><a href ='#'>{$technology}</a></td>
				      <td>{$salary}</td>
				      <td>{$decription}</td>
				      <td>{$address}</td>
				      <td>{$phonenumber}</td>
				      <td><button><a href = '#''>Chi Tiết</a> </button></td>
				      <td><button><a href = '#''>Chỉnh sửa</a> </button></td>
				      <td><button><a href = '#''>Xóa</a> </button></td>
				    </tr>
				  </tbody>
				  ";
				}*/
		//}
				?>
			</table>
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