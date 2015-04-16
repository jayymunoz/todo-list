<?php
//why is this important? why does localhost have to first?
$mysqli = new mysqli('localhost', 'root', 'root', 'todo'); 
//$mysqli->connect_error then we want it to die on this message
if ($mysqli->connect_error) {
	die('Connection Error(' . $mysqli->connect_errno')'
  . $mysqli->connect_error);
}	
else {
	//echo "Connection made";
	#code...
}
 $mysqli->close();

?> 