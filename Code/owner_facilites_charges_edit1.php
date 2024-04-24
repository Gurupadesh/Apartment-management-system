<?php
include("../db_connect/db_connect.php");
$owner_facilities_charges_id=$_POST['owner_facilities_charges_id'];
$Flat_owner_id=$_POST['Flat_owner_id'];
$charges_amount=$_POST['charges_amount'];
$month=$_POST['month'];
$year=$_POST['year'];
$date=$_POST['date'];
$status=$_POST['status'];
$sql="update owner_facilities_charges set Flat_owner_id='$Flat_owner_id',Charges_amount='$charges_amount',Month='$month',Year='$year',M_Date='$date',Status='$status' where Owner_facilities_charges_id='$owner_facilities_charges_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="owner_facilities_charges_view.php";
</script>
