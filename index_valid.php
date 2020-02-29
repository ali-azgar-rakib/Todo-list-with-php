<?php
require_once 'db.php';
if(isset($_POST['addtask'])){
  $task_add = $_POST['textfield'];
  if(!empty($task_add)){
    $task_add_query = "INSERT INTO task_table (task_name) VALUES  ('$task_add')";
    $add_query = $dbcon -> query($task_add_query);
  }

  header('location: index.php');
  

  

}




?>
