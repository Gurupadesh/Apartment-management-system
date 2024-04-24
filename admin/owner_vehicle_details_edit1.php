<?php
include("../db_connect/db_connect.php");
$owner_vehicle_id=$_POST['owner_vehicle_id'];
$flat_owner_id=$_POST['flat_owner_id'];
$vehicle_no=$_POST['vehicle_no'];
$vehicle_type=$_POST['vehicle_type'];
$sql="update owner_vehicle_details set Flat_owner_id='$flat_owner_id',Vehicle_no='$vehicle_no',Vehicle_type='$vehicle_type' where Owner_vehicle_id='$owner_vehicle_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="owner_vehicle_details_view.php";
</script>
