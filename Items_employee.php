<?php

require "Config/Connection.php";

/**
 * 
 */
class Items extends Connection
{
	public $conn;
	protected $table = 'employees';
	
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

	// function create($payloads)
	// {
	// 	$sql = "INSERT INTO ". $this->table. " (nik, name, position_id, address, phone_numbers, place_of_birth, date_of_birth, marital_status, date_of_entry, basic_salary, gender, bank_account) VALUES (
	// 		'".$payloads['nik']."',
	// 		'".$payloads['name']."',
	// 		'".$payloads['position_id']."',
	// 		'".$payloads['address']."',
	// 		'".$payloads['phone_numbers']."',
	// 		'".$payloads['place_of_birth']."',
	// 		'".$payloads['date_of_birth']."',
	// 		'".$payloads['marital_status']."',
	// 		'".$payloads['date_of_entry']."',
	// 		'".$payloads['basic_salary']."',
	// 		'".$payloads['gender']."',
	// 		".$payloads['bank_account']."
	// 	)";	

	// 	return $this->conn->query($sql);
	// }

	// function update($id, $payloads)
	// {
	// 	$sql = "UPDATE ". $this->table ." SET ".
	// 		"nik = '". $payloads['nik'] ."',
	// 		name = '". $payloads['name'] ."',
	// 		position_id = '". $payloads['position_id'] ."',
	// 		address = '". $payloads['address'] ."',
	// 		phone_numbers = '". $payloads['phone_numbers'] ."',
	// 		place_of_birth = '". $payloads['place_of_birth'] ."',
	// 		date_of_birth = '". $payloads['date_of_birth'] ."',
	// 		marital_status = '". $payloads['marital_status'] ."',
	// 		date_of_entry = '". $payloads['date_of_entry'] ."',
	// 		basic_salary = '". $payloads['basic_salary'] ."',
	// 		gender = '". $payloads['gender'] ."',
	// 		bank_account = ". $payloads['bank_account']
	// 	." WHERE id = $id";

	// 	return $this->conn->query($sql);
	// }

	// function delete($id)
	// {
	// 	$sql = "DELETE FROM ". $this->table ." WHERE id = $id";
	// 	return $this->conn->query($sql);
	// }
}

// $item = new Items();
// $payload = [
// 	'name' => 'Sprite',
// 	'category' => 'Drink',
// 	'price' => 5000
// ];
// $data = $item->create($payload);
// var_dump($data);