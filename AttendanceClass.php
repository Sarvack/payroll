<?php

require "Config/Connection.php";

class Attendance extends Connection
{
	public $conn;
	protected $table = 'attendance';
	protected $employees = 'employees';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT  ".$this->table.".*, nik, name
		FROM ".$this->table."
		LEFT JOIN ".$this->employees." ON ".$this->employees.".id=".$this->table.".employees_id"
		;
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
		$sql = "INSERT INTO ". $this->table. " 
		(dates, time_in, time_out, work_hour) 
		VALUES (
            '".$payloads['dates']."',
            '".$payloads['time_in']."',
			'".$payloads['time_out']."',
			'".$payloads['work_hour']."'
		)";	
			// var_dump($payloads);
		return $this->conn->query($sql) OR die(mysqli_error());
	}

	function update($id, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
            "dates = '". $payloads['dates'] ."',
            time_in = '". $payloads['time_in'] ."',
			time_out = '". $payloads['time_out'] ."',
			work_hour = ". $payloads['work_hour']
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