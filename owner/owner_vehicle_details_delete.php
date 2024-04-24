<?php
include('../db_connect/db_connect.php');
$Owner_vehicle_id=$_REQUEST['Owner_vehicle_id'];
$sql="delete from owner_vehicle_details where Owner_vehicle_id=$Owner_vehicle_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='owner_vehicle_details_view.php';
</script>