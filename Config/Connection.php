<?php

/**
 * 
 */
class Connection
{
	const SERVERNAME = "localhost";
	const USERNAME = "root";
	const PASSWORD = "";
	const DATABASE = "payroll";
	public $conn;

	function start()
	{
		$this->conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DATABASE);

		// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		}
		// echo "Connected successfully";
		return $this->conn;
	}

	function stop()
	{
		$this->conn->close();
	}
}
