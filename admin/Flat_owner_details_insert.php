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

$sql="select * from flat_owner_details where Flat_id='$flat_id'";
	$res=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($res))
	{
	?>
<script>
alert("Flat Number Already Alloted...");
history.back();
</script>
<?php
	}
	else
	{
	
	
$sql="insert into flat_owner_details values(null,'$flat_owner_name','$flat_id','$address','$contact_no','$email_id','$aadhar_no','$owner_occupation','$dob','$gender')";
mysqli_query($conn,$sql);

$sql2="insert into login values(null,'$email_id','$contact_no','owner','Enter Your Email ID','$email_id','Active')";
mysqli_query($conn,$sql2);
?>
<script>
alert("successfully submitted....");
document.location='Flat_owner_details_view.php';
</script>
<?php
}
?>
