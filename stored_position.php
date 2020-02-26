<?php

require "Position.php";

$item = new Positions();
$payload = [
	'position_code' => $_POST['position_code'],
	'position_name' => $_POST['position_name'],
	'overtimes_pay_hour' => $_POST['overtimes_pay_hour']
];

$create = $item->create($payload);

// if($create === TRUE)
header("location: positions.php");
