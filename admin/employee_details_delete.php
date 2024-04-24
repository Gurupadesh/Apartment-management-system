<?php
include('../db_connect/db_connect.php');
$Employee_id=$_REQUEST['Employee_id'];
$sql="delete from employee_details where Employee_id=$Employee_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='employee_details_view.php';
</script>