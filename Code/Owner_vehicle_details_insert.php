<?php
include("../db_connect/db_connect.php");
$flat_owner_id=$_POST['flat_owner_id'];
$vehicle_no=$_POST['vehicle_no'];
$vehicle_type=$_POST['vehicle_type'];
$sql="insert into owner_vehicle_details values(null,'$flat_owner_id','$vehicle_no','$vehicle_type')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="owner_vehicle_details_view.php";
</script>
