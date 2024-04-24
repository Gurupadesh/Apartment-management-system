<?php
include("../db_connect/db_connect.php");
$Flat_owner_id=$_POST['Flat_owner_id'];
$charges_amount=$_POST['charges_amount'];
$month=$_POST['month'];
$year=$_POST['year'];
$date=$_POST['date'];

$sql="insert into owner_facilities_charges values(null,'$Flat_owner_id','$charges_amount','$month','$year','$date','Pending')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="owner_facilities_charges_view.php";
</script>

