<?php 
    include 'db-model.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);
  
    if ($delete) {
        $msg = 'Record Updated Successfully';
        $msgClass = 'alert-success';
        echo "<script>window.location.href = 'db-records.php';</script>";
    }
  ?>















