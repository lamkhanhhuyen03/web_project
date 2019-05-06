<?php

	require_once 'model/ManagerAdmin.php';

	$logCtrler = new ManagerAdmin;
	if(isset($_GET['unaccept'])){
		$logCtrler ->deletetemptTable($_GET['unaccept']);

		header('location: currentListRecruitment.php');
	}
?>