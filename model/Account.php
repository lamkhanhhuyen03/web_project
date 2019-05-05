<?php
include 'createMysqli.php';
class Account extends createMysqli
{
	function __construct()
	{
		parent::__construct();
	}
	//Check password and username correct or not
	function getuserInf($userid, $pass){
		$username = $this->conn->escape_string($userid);
		$password = $this->conn->escape_string($pass);
		$sql= "SELECT * FROM account WHERE username='$username' AND password ='$password'";
		$kq = $this->conn->query($sql);
		if ($kq->num_rows == 0) return FALSE;
		else return $kq->fetch_assoc();
	}
	// Check User Name is exist in database or not
	function checkUsername($userid){
		$username = $this->conn->escape_string($userid);
		$sql= "SELECT * FROM account WHERE username='$username'";
		$kq = $this->conn->query($sql);
		if ($kq->num_rows == 0) return FALSE;
		else return $kq->fetch_assoc();
	}

	//Adding new account in database
	function createAccount($userid, $pass){
		$username = $this->conn->escape_string($userid);
		$password = $this->conn->escape_string($pass);
		$sql = "INSERT INTO account(username,password,role) VALUES ('$username','$password','member')";
		$kq = $this->conn->query($sql);
	}
	/*SET @autoid:= 0;
	UPDATE account SET id = @autoid := (@autoid + 1);
	ALTER TABLE account AUTO_INCREMENT = 1;*/
}

?>