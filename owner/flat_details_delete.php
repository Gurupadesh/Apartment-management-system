<?php
include('../db_connect/db_connect.php');
$Flat_detail_id=$_REQUEST['Flat_detail_id'];
$sql="delete from flat_details where Flat_detail_id=$Flat_detail_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='flat_details_view.php';
</script>