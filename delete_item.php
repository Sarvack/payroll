<?php

require "Items.php";

$item = new Items();

$delete = $item->delete($_GET['id']);

// if($create === TRUE)
header("location: index.php");
