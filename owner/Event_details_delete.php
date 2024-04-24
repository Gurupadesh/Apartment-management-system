<?php
include('../db_connect/db_connect.php');
$Event_id=$_REQUEST['Event_id'];
$sql="delete from event_details where Event_id=$Event_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='Event_details_view.php';
</script>