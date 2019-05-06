<?php

	require_once 'model/ManagerAdmin.php';

	$logCtrler = new ManagerAdmin;
	if(isset($_GET['accept'])){
		$result = $logCtrler -> getAccept($_GET['accept']);
		$logCtrler -> addDatabase($result['technology'],$result['salary'],$result['decription'],$result['address'],$result['phonenumber']);
		$logCtrler ->deletetemptTable($_GET['accept']);

		header('location: currentListRecruitment.php');
	}
?>