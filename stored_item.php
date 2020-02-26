<?php

require "Items.php";

$item = new Items();
$payload = [
	'nik' => $_POST['nik'],
	'name' => $_POST['name'],
	'position_id' => $_POST['position_id'],
	'address' => $_POST['address'],
	'phone_numbers' => $_POST['phone_numbers'],
	'place_of_birth' => $_POST['place_of_birth'],
	'date_of_birth' => $_POST['date_of_birth'],
	'marital_status' => $_POST['marital_status'],
	'date_of_entry' => $_POST['date_of_entry'],
	'basic_salary' => $_POST['basic_salary'],
	'gender' => $_POST['gender'],
	'bank_account' => $_POST['bank_account']
];

$create = $item->create($payload);

// if($create === TRUE)
header("location: index.php");
