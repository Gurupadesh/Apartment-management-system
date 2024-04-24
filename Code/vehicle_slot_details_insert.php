<?php
include("../db_connect/db_connect.php");
$owner_vehicle_id=$_POST['owner_vehicle_id'];
$slot_no=$_POST['slot_no'];
$sql="insert into vehicle_slot_details values(null,'$owner_vehicle_id','$slot_no')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="vehicle_slot_details_view.php";
</script>