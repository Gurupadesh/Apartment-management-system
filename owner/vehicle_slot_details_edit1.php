<?php
include("../db_connect/db_connect.php");
$vehicle_slot_id=$_POST['vehicle_slot_id'];
$owner_vehicle_id=$_POST['owner_vehicle_id'];
$slot_no=$_POST['slot_no'];
$sql="update vehicle_slot_details set Owner_vehicle_id='$owner_vehicle_id',Slot_no='$slot_no' where Vehicle_slot_id='$vehicle_slot_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="vehicle_slot_details_view.php";
</script>
