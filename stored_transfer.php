<?php

require "TransferClass.php";

$item = new Transfer();
$payload = [
	'id' => $_POST['id'],
    'salary' => $_POST['basic_salary'],
    'overtime_hour' => $_POST['overtime_hour'],
	'overtime_pay' => $_POST['overtime_pay'],
	'total_salary' => $_POST['total_salary'],
	'month_pay' => $_POST['month_pay'],
	'payment_date' => $_POST['payment_date']
];

$create = $item->create($payload);
$log = $item->log_transfer($payload);

if($log === TRUE)
	
header("location: salary.php");

