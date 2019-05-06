<?php
require_once 'model/ManagerAdmin.php';

$logCtrler = new ManagerAdmin;


if(!empty($_POST['technology']) && !empty($_POST['salary']) && !empty($_POST['description']) && !empty($_POST['address']) && !empty($_POST['phonenumber'])) {

		$logCtrler->addtemptDataBase($_POST['technology'], $_POST['salary'],$_POST['description'], $_POST['address'],$_POST['phonenumber']);
	}
header('Location: index.php');
?>