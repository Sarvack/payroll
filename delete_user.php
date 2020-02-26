<?php

require "Users.php";

$item = new Users();

$delete = $item->delete($_GET['id']);

// if($create === TRUE)
header("location: user.php");
