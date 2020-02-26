<?php

require "Config/Connection.php";

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
		$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

		$sql = "INSERT INTO ". $this->table. " (username, email, password, level, avatar) VALUES (
			'".$payloads['username']."',
			'".$payloads['email']."',
			'".$password."',
			'".$payloads['level']."',
			'".$payloads['avatar']."'
		)";	

		return $this->conn->query($sql);
	}

	function update($id, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"username = '". $payloads['username'] ."',
			email = '". $payloads['email'] ."',
			password = '". $payloads['password'] ."',
			level = '". $payloads['level'] ."',
			avatar = ". $payloads['avatar']
		." WHERE id = $id";

		return $this->conn->query($sql);
	}

	function login($payloads)
    {
        $sql = "SELECT * FROM users WHERE username='".$payloads['username']."' OR email ='".$payloads['email']."'";

        return $this->conn->query($sql);
    }

	
}

// $item = new Items();
// $payload = [
// 	'name' => 'Sprite',
// 	'category' => 'Drink',
// 	'price' => 5000
// ];
// $data = $item->create($payload);
// var_dump($data);