
<?php
session_start();
require_once 'db.php';
$id = base64_decode($_GET['id']);
$data = "SELECT * FROM task_table WHERE id=$id";
$data_from_db = $dbcon->query($data);
$f_result = $data_from_db->fetch_assoc();

if(isset($_POST['update'])){
  $update_text = $_POST['update_text'];
  $update_query = "UPDATE task_table SET task_name='$update_text' WHERE id=$id";
  $update_date = $dbcon->query($update_query);
  if($update_date){
    $_SESSION['upadate_success'] = "Task updated successfully!";
  }
  header('location: index.php');
}

?>

<?php 
require_once 'header.php';
?>

<div class="container" >
  <div class='row'>
  
    <div class='col-8 mx-auto mt-5'>
    <h2 class="display-4 mx-auto mt-2 text-center">Update Task</h2>
    <form class="" action="" method="post">
    <div class='form-group'>
    <input class="form-control form-control-lg" type="text" name="update_text" value="<?=$f_result['task_name'] ?>">
    </div>
    <div class='form-group'>
    <input class="btn btn-warning btn-block" type="submit" name="update" value="update">
    </div>
  </form>
    </div>
  </div>
</div>
    
  </body>
</html>
