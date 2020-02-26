<?php

require "Config/Connection.php";

/**
 * 
 */
class Positions extends Connection
{
	public $conn;
	protected $table = 'positions';
	
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
		$sql = "INSERT INTO ". $this->table. " (position_code, position_name, overtimes_pay_hour) VALUES (
			'".$payloads['position_code']."',
			'".$payloads['position_name']."',
			".$payloads['overtimes_pay_hour']."
		)";	

		return $this->conn->query($sql);
	}

	function update($id, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"position_code = '". $payloads['position_code'] ."',
			position_name = '". $payloads['position_name'] ."',
			overtimes_pay_hour = ". $payloads['overtimes_pay_hour']
		." WHERE id = $id";

		return $this->conn->query($sql);
	}

	function delete($id)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id = $id";
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