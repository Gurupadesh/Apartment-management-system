<?php
include("../db_connect/db_connect.php");
$flat_number=$_POST['flat_number'];
$flat_description=$_POST['flat_description'];
$flat_photo=$_FILES['flat_photo']['name'];
$tmp_location=$_FILES['flat_photo']['tmp_name'];
$target="../images/".$flat_photo;
move_uploaded_file($tmp_location,$target);
$flat_type=$_POST['flat_type'];
$sql="insert into flat_details values(null,'$flat_number','$flat_description','$flat_photo','$flat_type')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="flat_details_view.php";
</script>
