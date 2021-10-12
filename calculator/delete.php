<?php
include '../../../mmlt_database/db.php';
$id=$_REQUEST['id'];
$query = "DELETE FROM homeready_30yr WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>