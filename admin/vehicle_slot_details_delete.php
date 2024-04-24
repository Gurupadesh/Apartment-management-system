<?php
include('../db_connect/db_connect.php');
$Vehicle_slot_id=$_REQUEST['Vehicle_slot_id'];
$sql="delete from vehicle_slot_details where Vehicle_slot_id=$Vehicle_slot_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='vehicle_slot_details_view.php';
</script>