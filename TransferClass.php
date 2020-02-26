<?php

require "Config/Connection.php";

/**
 * 
 */
class Transfer extends Connection
{
	public $conn;
	protected $table = 'payrolls';
	protected $employees = 'employees';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT  ".$this->table.".*, name, basic_salary, DATE_FORMAT(payment_date,'%a, %b  %Y ') AS daTex
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
		(employees_id, salary, overtime_hour, overtime_pay, total_salary, month_pay, payment_date, payment_hours) 
		VALUES (
            '".$payloads['id']."',
            '".$payloads['salary']."',
            '".$payloads['overtime_hour']."',
			'".$payloads['overtime_pay']."',
			'".$payloads['total_salary']."',
			'".$payloads['month_pay']."',
			'".$payloads['payment_date']."',
			NOW()
		)";	
			// var_dump($payloads);
		return $this->conn->query($sql);
	}

	function update($id, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
            "salary = '". $payloads['salary'] ."',
            overtime_hour = '". $payloads['overtime_hour'] ."',
			overtime_pay = '". $payloads['overtime_pay'] ."',
			total_salary = '". $payloads['total_salary'] ."',
			month_pay = '". $payloads['month_pay'] ."',
			payment_date = '". $payloads['payment_date'] ."',
			payment_hours = ". $payloads['payment_hours']
		." WHERE id = $id";

		return $this->conn->query($sql);
	}

	function delete($id)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id = $id";
		return $this->conn->query($sql);
	}

	function log_transfer($payloads)
	{
		$sql = "INSERT INTO history (employee_id, basic_salary, total_salary) VALUES ('".$payloads['id']."', '".$payloads['salary']."','".$payloads['total_salary']."')";
		
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