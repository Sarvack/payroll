<?php

require "AttendanceClass.php";

$item = new Attendance();

$delete = $item->delete($_GET['id']);

// if($create === TRUE)
header("location: attendance_admin.php");
