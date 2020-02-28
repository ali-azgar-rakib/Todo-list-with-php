<?php
session_start();
require_once "db.php";
if (isset($_GET['id'])) {
  $id = base64_decode($_GET['id']);
  $delete_query = "DELETE FROM task_table WHERE id=$id";
  $delete_query;
  $run_query = $dbcon->query($delete_query);
  if($run_query){
    $_SESSION['delete_success'] = "Task delete successfully";
}


header('location: index.php');
}
else{
  header('location: index.php');
}

?>
