<?php
include("../db_connect/db_connect.php");
$event_name=$_POST['event_name'];
$event_desc=$_POST['event_desc'];
$event_date=$_POST['event_date'];


$event_photo=$_FILES['event_photo']['name'];
$tmp_location=$_FILES['event_photo']['tmp_name'];
$target="../images/".$event_photo;
move_uploaded_file($tmp_location,$target);


$sql="insert into event_details values(null,'$event_name','$event_desc','$event_date','$event_photo')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="Event_details_view.php";
</script>


