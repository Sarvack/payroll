<?php

require "LoginClass.php";

$item = new Users();
$payload = [
	'username' => $_POST['username'],
	'email' => $_POST['email'],
	'password' => $_POST['password'],
	'level' => $_POST['level'],
	'avatar' => $_FILES['avatar']
];

$update = $item->update($_GET['id'], $payload);

// if($create === TRUE)
header("location: user.php");

