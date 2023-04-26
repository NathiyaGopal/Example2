<?php
require_once('formconnection.php');
$id=$_REQUEST['id'];

$query = "DELETE FROM register_data where Register_Id = $id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
echo 'Record has been deleted.';
header("Location: RecordView.php"); 
?>