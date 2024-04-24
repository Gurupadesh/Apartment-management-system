<?php
include('../db_connect/db_connect.php');
$Owner_facilities_charges_id=$_REQUEST['Owner_facilities_charges_id'];
$sql="delete from owner_facilities_charges where Owner_facilities_charges_id=$Owner_facilities_charges_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='owner_facilities_charges_view.php';
</script>