<?php
$task = scrpit_tags($_POST['task']);
$name = date('Y-m-d');
$time = date('H:i:s');

include('connect.php');

$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
$mysqli ->query("INSERT INTO task VALUES('', '$task', '$date', '$time')");


$query = "SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time' ";


if ($result = $mysqli->query(query)){


	{

 ?>