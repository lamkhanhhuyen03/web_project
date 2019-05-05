<?php
require_once 'model/Account.php';

class LoginController extends Account
{
	function __construct()
	{
		parent::__construct();
	}

	function loginFunction($username,$password)
	{
		$acc = new Account;
		$result = $acc->getuserInf($username, $password);
		if($result['username'] == $username && $result['password'] == $password)
		{
			if($result['role'] == 'member')
			{
				$_SESSION['user_id'] = $result['username'];
				$_SESSION['user_role'] = $result['role'];
				header('location: view/member.php');
				exit();
			}
			else if ($result['role'] == 'admin') {
				$_SESSION['user_id'] = $result['username'];
				$_SESSION['user_role'] = $result['role'];
				header('location: admin.php');
				exit();
			}
		}
		else
		{
			header('location: login.php?msg');
			exit();
		}
	}

	function Register($username,$password,$repassword)
	{
		$acc = new Account;
		$result = $acc->checkUsername($username);
		if($result['username'] == $username)
		{
			header('location: register.php?msg');
			exit();
		}else {
			if($password == $repassword)
			{
				$acc->createAccount($username,$password);
				$_SESSION['user_id'] = $result['username'];
				$_SESSION['user_role'] = $result['role'];
				header('location: view/member.php');
				exit();
			}
			else {
				header('location: register.php?msg');
				exit();
			}
		}
	}

	function checkLogin()
	{
		if (!empty($_SESSION['user_id']))
		{
			if ($_SESSION['user_role'] == 'member')
			{
				header('location: view/member.php');
				die();
			}
			else if ($_SESSION['user_role'] == 'admin') {
				header('location: admin.php');
				die();
			}
		}
	}
}
?>