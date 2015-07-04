<?php
$todo = $_REQUEST["todo"];
$db = new SQLite3('db/todo.db');
$sql_command = "insert into todo (todo_item) values ('$todo')";
$db->exec($sql_command);
?>