<?php
include("../db_connect/db_connect.php");
$facility_name=$_POST['facility_name'];
$facility_desc=$_POST['facility_desc'];
$facility_charges=$_POST['facility_charges'];
$facility_photo=$_FILES['facility_photo']['name'];
$tmp_location=$_FILES['facility_photo']['tmp_name'];
$target="../images/".$facility_photo;
move_uploaded_file($tmp_location,$target);
$sql="insert into facilities values(null,'$facility_name','$facility_desc','$facility_charges','$facility_photo')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="facilities_view.php";
</script>
