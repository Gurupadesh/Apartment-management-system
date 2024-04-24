<?php
include('../db_connect/db_connect.php');
$Flat_owner_id=$_REQUEST['Flat_owner_id'];
$sql="delete from flat_owner_details where Flat_owner_id=$Flat_owner_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='Flat_owner_details_view.php';
</script>