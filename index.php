<!DOCTYPE html>
<html>
<head>
	<title> Justin's To-do List</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body
<div class"wrap">
  <div class="task-list">
  <ul>
    <?php require("includes/connection.php"); ?>
    </ul>
</div>
<form class="add-new-task" autocomplete="off">
<input type="text" name="new-task" placeholder="Add new item..."/>
</form>
</div>
</body>
</html>