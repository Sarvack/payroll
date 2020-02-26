<?php

require "Position.php";

$item = new Positions();

$delete = $item->delete($_GET['id']);

// if($create === TRUE)
header("location: positions.php");
