<?php
$todo_id = $_POST["todo_id"];
$todoArray = explode(',', $todo_id);
$db = new SQLite3('db/todo.db');
foreach($todoArray as $idValue){
    $sql_command = "delete from todo where item_number = '$idValue'";
    $db->exec($sql_command);
}
?>