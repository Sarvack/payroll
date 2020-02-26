<?php

require "Config/Connection.php";

//disini kan ada dua table nah jadi gabunginnya gimana ??

/**
 * 
 */
class Users extends Connection
{
	public $conn;
	protected $table = 'users';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT $field FROM ".$this->table;
		$result = $this->conn->query($sql);
		return $result;
	}

	function find($id)
	{
		$sql = "SELECT * FROM ". $this->table. " WHERE id = $id";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function create($payloads)
	{
		$sql = "INSERT INTO ". $this->table. " (username, email, password, level) VALUES (
			'".$payloads['username']."',
			'".$payloads['email']."',
			'".$payloads['password']."',
			'".$payloads['level']."',
			".$payloads['avatar']."
		)";	

		return $this->conn->query($sql);
	}

	function update($id, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"nik = '". $payloads['username'] ."',
			name = '". $payloads['emaail'] ."',
			position_id = '". $payloads['password'] ."',
			address = '". $payloads['level'] ."',
			bank_account = ". $payloads['avatar']
		." WHERE id = $id";

		return $this->conn->query($sql);
	}

	function delete($id)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id = $id";
		return $this->conn->query($sql);
	}
}


// function detail($id){

//  global $result;
//  $sql="SELECT * FROM employees WHERE id=?";
//  if($stmt=mysqli_prepare($koneksi, $sql)){
//   mysqli_stmt_bind_param($stmt,"i",$param_id);
//   $param_id = $var_id;
//   if(mysqli_stmt_execute($stmt)){
//    $result=mysqli_stmt_get_result($stmt);
//    if(mysqli_num_rows($result)==1){
//     return true; //jika ada data nilai true
//    }else{
//     return false; //jika data tidak ditemukan nilai false
//    }
//   }else{
//    echo "Terjadi kesalahan";
//   }
//  }
//  mysqli_stmt_close($stmt);
// }
// $item = new Items();
// $payload = [
// 	'name' => 'Sprite',
// 	'category' => 'Drink',
// 	'price' => 5000
// ];
// $data = $item->create($payload);
// var_dump($data);