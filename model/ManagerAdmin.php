<?php
include 'createMysqli.php';
class ManagerAdmin extends createMysqli
{
	function __construct()
	{
		parent::__construct();
	}
	function addDatabase($technolog, $salar ,$descriptio,$addres,$phonenumbe){
		$technology = $this->conn->escape_string($technolog);
		$salary = $this->conn->escape_string($salar);
		$description = $this->conn->escape_string($descriptio);
		$address = $this->conn->escape_string($addres);
		$phonenumber = $this->conn->escape_string($phonenumbe);
		$sql = "INSERT INTO jobs(technology,salary,decription,address,phonenumber) VALUES ('$technology','$salary','$description','$address','$phonenumber')";
		$kq = $this->conn->query($sql);
	}

	function getDatabase(){
		$sql = "SELECT * FROM jobs";
		$kq = $this->conn->query($sql);
		foreach($kq as $result){
			$id = $result['id'] ; 
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
			<td><button><a href = 'blog-single.php?blog-single=$result[id]' >Chi Tiết</a> </button></td>
			<td><button><a href = 'edit.php?edit=$result[id]''>Chỉnh sửa</a> </button></td>
			<td><button><a href = 'delete.php?edit=$result[id]'''>Xóa</a> </button></td>
			</tr>
			</tbody>
			";
		}
	}

	function editTable($idd){
		$id = $this->conn->escape_string($idd);
		$sql = "SELECT * FROM jobs WHERE id ='$id'";
		$kq = $this->conn->query($sql);
		if ($kq->num_rows == 0) return FALSE;
		else return $kq->fetch_assoc();
	}

	function updateTable($technolog, $salar ,$descriptio,$addres,$phonenumbe,$id){
		$technology = $this->conn->escape_string($technolog);
		$salary = $this->conn->escape_string($salar);
		$description = $this->conn->escape_string($descriptio);
		$address = $this->conn->escape_string($addres);
		$phonenumber = $this->conn->escape_string($phonenumbe);
		$sql= "UPDATE jobs SET technology = '$technology' , salary = '$salary', decription = '$description', address = '$address' , phonenumber = '$phonenumber' WHERE  id = '$id' ";
		$kq = $this->conn->query($sql);
	}

	function deleteTable($idd){
		$id = $this->conn->escape_string($idd);
		$sql = "DELETE FROM jobs WHERE id = '$id'";
		$kq = $this->conn->query($sql);
	}
	function resets($idd){
		$id = $this->conn->escape_string($idd);
		$sql = "ALTER TABLE jobs AUTO_INCREMENT = '$id'";
		$kq = $this->conn->query($sql);	
	}

	function showDatabase(){
		$sql = "SELECT * FROM jobs";
		$kq = $this->conn->query($sql);
		if ($kq->num_rows == 0) return FALSE;
		else return $kq;
	}

	function searchDatabase($searchh){
		$search = $this->conn->escape_string($searchh);
		$sql = "SELECT * FROM jobs WHERE technology ='$search'";
		$kq = $this->conn->query($sql);
		if ($kq->num_rows == 0) return FALSE;
		else return $kq;
	}
	/*WHERE technology = '$technology' AND salary = '$salary' AND decription ='$description' AND address = '$address' AND phonenumber ='$phonenumber'"
	SET @autoid:= 0;
	UPDATE account SET id = @autoid := (@autoid + 1);
	ALTER TABLE account AUTO_INCREMENT = 1;*/
}
?>