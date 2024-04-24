<?php
include('../db_connect/db_connect.php');
$Expenditure_id=$_REQUEST['Expenditure_id'];
$sql="delete from expenditure where Expenditure_id=$Expenditure_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='expenditure_view.php';
</script>