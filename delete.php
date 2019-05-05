<?php

	require_once 'model/ManagerAdmin.php';

	$logCtrler = new ManagerAdmin;
	if(isset($_GET['edit'])){
		$result = $logCtrler -> deleteTable($_GET['edit']);
		$logCtrler -> resets($_GET['edit']);
		header('location: admin.php');
	}
?>