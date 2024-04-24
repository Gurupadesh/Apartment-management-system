<?php
include("../db_connect/db_connect.php");
$flat_detail_id=$_POST['flat_detail_id'];
$flat_number=$_POST['flat_number'];
$flat_description=$_POST['flat_description'];
$flat_photo=$_POST['flat_photo'];
$flat_type=$_POST['flat_type'];
$sql="update flat_details set Flat_number='$flat_number',Flat_description='$flat_description',flat_photo='$flat_photo',flat_type='$flat_type' where Flat_detail_id='$flat_detail_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="flat_details_view.php";
</script>
