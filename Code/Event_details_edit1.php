<?php
include("../db_connect/db_connect.php");
$event_id=$_POST['event_id'];
$event_name=$_POST['event_name'];
$event_desc=$_POST['event_desc'];
$event_date=$_POST['event_date'];
$event_photo=$_POST['event_photo'];
$sql="update event_details set Event_name='$event_name',Event_description='$event_desc',Event_date='$event_date',Event_photo='$event_photo' where Event_id='$event_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="Event_details_view.php";
</script>
