<?php
include("../db_connect/db_connect.php");
$flat_owner_name=$_POST['flat_owner_name'];
$flat_id=$_POST['flat_id'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$aadhar_no=$_POST['aadhar_no'];
$owner_occupation=$_POST['owner_occupation'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$sql="insert into flat_owner_details values(null,'$flat_owner_name','$flat_id','$address','$contact_no','$email_id','$aadhar_no','$owner_occupation','$dob','$gender')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location='Flat_owner_details_view.php';
</script>
