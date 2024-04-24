<?php
include("../db_connect/db_connect.php");
$flat_owner_id=$_POST['flat_owner_id'];
$flat_owner_name=$_POST['flat_owner_name'];
$flat_id=$_POST['flat_id'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$aadhar_no=$_POST['aadhar_no'];
$owner_occupation=$_POST['owner_occupation'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$sql="update flat_owner_details set Flat_owner_name='$flat_owner_name',Flat_id='$flat_id',Address='$address',contact_no='$contact_no',email_id='$email_id',Aadhar_no='$aadhar_no',owner_occupation='$owner_occupation',DOB='$dob',Gender='$gender' where Flat_owner_id='$flat_owner_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="Flat_owner_details_view.php";
</script>
