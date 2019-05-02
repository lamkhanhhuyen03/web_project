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
				header('location: view/member.php');
				exit();
			}
		}
		else
		{
			header('location: login.php');
			exit();
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
				header('location: view/member.php');
				die();
			}
		}
	}
}
?>