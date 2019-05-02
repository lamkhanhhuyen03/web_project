<?php
include 'createMysqli.php';
class Account extends createMysqli
{
	function __construct()
	{
		parent::__construct();
	}

	function getuserInf($userid, $pass){
		$username = $this->conn->escape_string($userid);
		$password = $this->conn->escape_string($pass);
		$sql= "SELECT * FROM account WHERE username='$username' AND password ='$password'";
		$kq = $this->conn->query($sql);
		$this->conn->close();
		if ($kq->num_rows == 0) return FALSE;
		else return $kq->fetch_assoc();
	}
}

?>