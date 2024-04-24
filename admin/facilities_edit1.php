<?php
include("../db_connect/db_connect.php");
$facility_id=$_POST['facility_id'];
$facility_name=$_POST['facility_name'];
$facility_desc=$_POST['facility_desc'];
$facility_charges=$_POST['facility_charges'];

$sql="update facilities set Facility_name='$facility_name',Facility_description='$facility_desc',Facility_charges='$facility_charges' where Facility_id='$facility_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="facilities_view.php";
</script>
