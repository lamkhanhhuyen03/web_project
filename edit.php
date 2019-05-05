<?php

	require_once 'model/ManagerAdmin.php';

	$logCtrler = new ManagerAdmin;
	if(isset($_GET['edit'])){
		$result = $logCtrler -> editTable($_GET['edit']);
		$id = $_GET['edit'];
	}
	if(!empty($_POST['technology']) && !empty($_POST['salary']) && !empty($_POST['description']) && !empty($_POST['address']) && !empty($_POST['phonenumber'])) {
		$logCtrler ->updateTable($_POST['technology'],$_POST['salary'],$_POST['description'],$_POST['address'],$_POST['phonenumber'],$_POST['id']);
		header('location: admin.php');
	}
?>
<form action="edit.php" method="POST">
	<p>
		<input type="hidden" name ="id" value ="<?php echo $result['id'] ?>">
	</p>
	<p> Technology
		<input type="text" name ="technology" value ="<?php echo $result['technology'] ?>">
	</p>
	<p> Salary
		<input type="text" name ="salary" value ="<?php echo $result['salary'] ?>">
	</p>
	<p> Description
		<input type="text" name ="description" value ="<?php echo $result['decription'] ?>">
	</p>
	<p> Address
		<input type="text" name ="address"  value ="<?php echo $result['address'] ?>">
	</p>
	<p> Phone number
		<input type="text" name ="phonenumber"  value ="<?php echo $result['phonenumber'] ?>">
	</p>
	<input type = "submit" value="Add"><br>
</form>