<?php
include('../db_connect/db_connect.php');
$Facility_id=$_REQUEST['Facility_id'];
$sql="delete from facilities where Facility_id=$Facility_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='facilities_view.php';
</script>